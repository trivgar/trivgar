# trivgar.com — personal site

Static site, no build step. Hand-written HTML served straight from the repo root.

| | |
|---|---|
| Repo | `trivgar/trivgar` |
| Hosting | **GitHub Pages** — branch `main`, path `/`. Not Cloudflare. |
| Domain | `trivgar.com` (`CNAME`). DNS is proxied through Cloudflare, so a `server: cloudflare` response header does **not** mean Cloudflare hosts it. |

## Critical rule

**Publishing is `git push origin main`.** There is no deploy command and wrangler
cannot touch this site. Pages rebuilds in ~45 seconds, live to the public
internet. Per the global rule, always ask before pushing — a commit here is a
draft, a push is publication.

`.nojekyll` disables Jekyll processing. Keep it: without it GitHub Pages hides
every path beginning with `_`.

## Pages

| Path | What it is |
|---|---|
| `index.html` | Home |
| `pihole.html` | Universal Pi-hole install guide |
| `health-dashboard.html` | Health dashboard |
| `tylers-marine/` | Client site preview — Tyler's Marine & Engine Service |
| `README.md` | **The GitHub profile README**, not a site page. It renders on github.com/trivgar. |

## Do not re-add jail-scraper

`jail-scraper/` is in `.gitignore` and was untracked in `607e5f8` because it was
**publishing personal data to a public site**. The files are still on disk
(`scrape.js`, `watchlist.json`, `last_run.log`) and still run locally — see the
Windows Task Scheduler job and the wake-timer note in memory. Keep it local.
Never `git add` it, and never move its output into a published page.

## Do not re-publish the archive

`archive/` held Trav's 2003-2004 personal sites — friends' photos, a band's
pages, a LAN party, someone else's art — built when he was sixteen. **All 12,996
files were untracked and `archive/` gitignored on 2026-09-16** at his request:
"I don't want to put all my private stuff from what I was 16 out there again."
The files are still on disk at `archive/`. Never `git add` them.

noindex was considered and rejected: it leaves every page public and reachable
by URL, only unlisted, which is not what taking it down means.

Two things that pass came out of, worth not repeating. This file previously
claimed "All PHP was converted to HTML" — the conversion had run but the 3,240
`.php` originals stayed tracked, and Pages served them as readable source,
including three PHP-Nuke `config.php` files with live DB credentials. And 1,979
email addresses across 1,555 files were published, including real personal
addresses of other people in live `mailto:` links. **A claim in this file is not
evidence; check the tree.**

## Do not re-publish claude.html

`claude.html` was a Claude Code / Tailscale tutorial Trav wrote **for his dad and
brother**, not a site page. It was untracked and added to `.gitignore` on
2026-09-16 because the site should not advertise Claude or AI. The file is still
on disk and a copy lives in `/mnt/c/Users/Trav/scratch/`. Don't `git add` it.

## Notes

- `node_modules/` is gitignored; the only dependency is Playwright, used for
  local layout checks. There is no bundler and nothing to build.
- `.claude/` holds two lines of TTS config (`tts-provider.txt`,
  `tts-personality.txt`). Without `tts-provider.txt` a session here would fall
  back to playing audio on the PC instead of the phone — leave it alone.
