# sync-notes.sh — Quick Reference

## Daily Workflow

```bash
# 1. Make notes in Obsidian

# 2. Preview what changed
./scripts/sync-notes.sh sync -n

# 3. Copy vault → website content & deploy
./scripts/sync-notes.sh deploy
```

That's it. One command to go from "notes done" to "site live".

## Other Commands

| Command | What it does |
|---|---|
| `serve` | Preview at http://localhost:8080 |
| `deploy -n` | Preview changes without deploying |
| `blacklist ls` | Show currently excluded folders |
| `blacklist add "folder/**"` | Exclude a folder from the site |
| `blacklist rm "folder/**"` | Stop excluding a folder |

## Blacklist Examples

```bash
# Hide specific folders
./scripts/sync-notes.sh blacklist add "copilot/**"
./scripts/sync-notes.sh blacklist add "**/Untitled.md"

# Check what's hidden
./scripts/sync-notes.sh blacklist ls
```

## How It Works

`deploy` = rsync vault → content → git commit → git push → GitHub Actions auto-builds the site

The vault path is stored in `scripts/vault-path.conf` — update it if you move your vault.
