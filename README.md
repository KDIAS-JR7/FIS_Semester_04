# FIS Semester 04 — Digital Garden

My Obsidian notes from 4th semester, published at **https://kdias-jr7.github.io/FIS_Semester_04/**

Built with [Quartz](https://quartz.jzhao.xyz/).

## Quick Start

```bash
git clone https://github.com/KDIAS-JR7/FIS_Semester_04.git
cd FIS_Semester_04
npm ci
npx quartz build --serve
```

Open http://localhost:8080 — all notes, search, table of contents, and PDF download work locally.

## Updating Content

```bash
# Preview what changed from the Obsidian vault
./scripts/sync-notes.sh sync -n

# Copy changes and deploy
./scripts/sync-notes.sh deploy
```

## Excluding Folders

```bash
# Hide a folder from the site
./scripts/sync-notes.sh blacklist add "folder-name/**"

# See what's hidden
./scripts/sync-notes.sh blacklist ls
```

## Structure

| Path | Description |
|---|---|
| `content/` | Markdown notes (mirrors the Obsidian vault) |
| `quartz/` | Quartz source (generator config, components, styles) |
| `quartz.config.ts` | Site title, theme (Catppuccin), ignore patterns |
| `scripts/sync-notes.sh` | Sync vault → content → deploy |

## Deployment

Push to `main` → GitHub Actions auto-builds and deploys to GitHub Pages.
