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
| `pihole.html` | Pi-hole + Unbound guide, checked against Pi-hole v6 on the real Pi |
| `roborock-valetudo.html` | Roborock Q7 Max + Valetudo guide, written from Trav's own re-roots |
| `944-turbo.html` | The 944 Turbo page. **Live but deliberately unlinked**: not on the homepage, not in `sitemap.xml`, until Trav says it's ready |
| `img/` | Photos for the guides and the 944 page. Trav's photos go up unedited (no blurring, no cropping); only resized, with metadata stripped |
| `archive/` | The index and four site homepages only; see below |
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

**Landing pages only came back the same day** (dae1749), because his first
request had been to hide everything except each site's landing page. As of
2026-09-24 the published set is `archive/index.html` plus the homepages of
69workshop, 691, 692 and 69workshop12, force-added with `git add -f` while
`archive/` stays ignored. Team Five and Valor were removed at his request. The
bio's "website in 2003" links to `/archive/`. Nothing below a homepage goes up.

- 69workshop and 69workshop12 also carry `welcome.htm`, the frame each homepage
  shows. Without it the main panel is a 404.
- 691 loads Ruffle 0.6.0 from jsdelivr, pinned with an SRI hash, to play its
  Flash buttons. Four of its `.swf` files and two GIFs are 0 bytes on disk,
  lost before this repo existed. There is nothing to restore.
- Test archive changes against `git checkout-index -f -a --prefix=<dir>/`
  served locally, never the working tree, which still holds every private page.

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

## Do not re-publish health-dashboard.html

`health-dashboard.html` is a private medication tracker for a family member. It
was served publicly from February 2026 until it was untracked and gitignored on
2026-09-25. The file is still on disk. Don't `git add` it, and remember the repo
is public: the old versions are still in its git history.

## Notes

- `node_modules/` is gitignored; the only dependency is Playwright, used for
  local layout checks. There is no bundler and nothing to build.
- `.claude/` holds two lines of TTS config (`tts-provider.txt`,
  `tts-personality.txt`). Without `tts-provider.txt` a session here would fall
  back to playing audio on the PC instead of the phone — leave it alone.
