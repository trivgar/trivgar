#!/usr/bin/env node
/**
 * Pierce County Jail Roster Scraper
 * Checks the jail roster for watched names and sends ntfy push notifications.
 */

const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');

const SCRIPT_DIR = __dirname;
const WATCHLIST_FILE = path.join(SCRIPT_DIR, 'watchlist.json');
const ROSTER_URL = 'https://linxonline.co.pierce.wa.us/linxweb/Booking/GetJailRoster.cfm';
const NTFY_URL = 'https://ntfy.sh';

function loadWatchlist() {
  return JSON.parse(fs.readFileSync(WATCHLIST_FILE, 'utf-8'));
}

async function fetchAndParseRoster() {
  const browser = await chromium.launch({ headless: true });
  const page = await browser.newPage();
  await page.goto(ROSTER_URL, { waitUntil: 'networkidle', timeout: 30000 });
  await page.waitForTimeout(3000);

  const inmates = await page.evaluate(() => {
    const rows = [];
    for (const table of document.querySelectorAll('table')) {
      for (const tr of table.querySelectorAll('tr')) {
        const cells = tr.querySelectorAll('td');
        if (cells.length >= 4) {
          const name = cells[1]?.innerText?.trim() || '';
          const bookingId = cells[2]?.innerText?.trim() || '';
          const facility = cells[3]?.innerText?.trim() || '';
          const releaseDate = cells[4]?.innerText?.trim() || '';
          if (name && bookingId && /^\d{4}/.test(bookingId)) {
            rows.push({ name, bookingId, facility, releaseDate });
          }
        }
      }
    }
    return rows;
  });

  await browser.close();
  return inmates;
}

function checkMatches(inmates, watchNames) {
  return inmates.filter(inmate => {
    const upper = inmate.name.toUpperCase();
    return watchNames.some(w => {
      const wUpper = w.toUpperCase();
      return upper.includes(wUpper) || wUpper.includes(upper);
    });
  });
}

async function sendNotification(topic, matches) {
  const title = `Jail Roster Alert: ${matches.length} match(es) found`;
  
  // Build message body with booking links
  const BOOKING_URL_BASE = 'https://linxonline.co.pierce.wa.us/linxweb/Booking/GetBooking.cfm?booking_id=';
  const body = matches.map(m => {
    let line = `• ${m.name} — ${m.facility}`;
    if (m.releaseDate) line += ` (Released: ${m.releaseDate})`;
    return line;
  }).join('\n');

  // Build click actions for each match (ntfy supports multiple actions)
  const actions = matches.slice(0, 3).map((m, i) => 
    `view, ${m.name.split(',')[0]}, ${BOOKING_URL_BASE}${m.bookingId}`
  ).join('; ');

  const resp = await fetch(`${NTFY_URL}/${topic}`, {
    method: 'POST',
    body,
    headers: {
      'Title': title,
      'Priority': 'high',
      'Tags': 'rotating_light',
      'Actions': actions,
    },
  });

  if (!resp.ok) throw new Error(`ntfy returned ${resp.status}`);
  return resp.status;
}

async function main() {
  const now = new Date().toISOString().replace('T', ' ').slice(0, 19);
  console.log(`[${now}] Starting jail roster scrape...`);

  const config = loadWatchlist();
  const { names: watchNames, ntfy_topic: ntfyTopic } = config;

  if (!watchNames.length) {
    console.log('No names in watchlist. Exiting.');
    return;
  }

  console.log(`Watching for ${watchNames.length} name(s)`);

  const inmates = await fetchAndParseRoster();
  console.log(`Parsed ${inmates.length} inmates from roster.`);

  const matches = checkMatches(inmates, watchNames);

  if (matches.length) {
    console.log(`MATCH FOUND: ${matches.length} result(s)`);
    matches.forEach(m => console.log(`  -> ${m.name} | ${m.bookingId} | ${m.facility}`));
    const status = await sendNotification(ntfyTopic, matches);
    console.log(`Notification sent (HTTP ${status})`);
  } else {
    console.log('No matches found.');
  }

  console.log(`[${now}] Done.`);
}

main().catch(err => {
  console.error('Error:', err.message);
  process.exit(1);
});
