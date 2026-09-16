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
every path beginning with `_`, which breaks the archive.

## Pages

| Path | What it is |
|---|---|
| `index.html` | Home |
| `pihole.html` | Universal Pi-hole install guide |
| `health-dashboard.html` | Health dashboard |
| `tylers-marine/` | Client site preview — Tyler's Marine & Engine Service |
| `archive/` | 2003-2004 sites (69workshop, ASOP, Valor, Seeds, blr…). PHP was converted to HTML, but the 3,240 `.php` originals stayed tracked until 2026-09-16 and Pages served them as readable source — including three PHP-Nuke `config.php` files with live DB credentials. They are now untracked and `archive/**/*.php` is gitignored. Don't reintroduce `.php`. `_notes/` was gitignored, and is genuinely absent from the index. |
| `README.md` | **The GitHub profile README**, not a site page. It renders on github.com/trivgar. |

## Do not re-add jail-scraper

`jail-scraper/` is in `.gitignore` and was untracked in `607e5f8` because it was
**publishing personal data to a public site**. The files are still on disk
(`scrape.js`, `watchlist.json`, `last_run.log`) and still run locally — see the
Windows Task Scheduler job and the wake-timer note in memory. Keep it local.
Never `git add` it, and never move its output into a published page.

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
