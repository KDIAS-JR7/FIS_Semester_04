#!/bin/bash
set -e

CONFIG_DIR="$(cd "$(dirname "$0")" && pwd)"
QUARTZ_DIR="$(cd "$CONFIG_DIR/.." && pwd)"
source "$CONFIG_DIR/vault-path.conf"

# rsync exclusions that mirror the Quartz ignorePatterns
RSYNC_EXCLUDES=(
  "Capstone Project/"
  "Capstone P"
  "Tags/"
  "PastedImages/"
  ".obsidian/"
  ".trash/"
  ".copilot-index/"
  ".space/"
  ".makemd/"
  # Site-managed files (not from vault)
  "index.md"
)

blacklist_ls() {
  echo "=== Quartz ignorePatterns ==="
  sed -n '/ignorePatterns:/,/\]/p' "$QUARTZ_DIR/quartz.config.ts" \
    | grep '"' | sed 's/.*"\(.*\)".*/\1/' | sed 's/^/  /'

  echo ""
  echo "=== Rsync exclusions ==="
  for e in "${RSYNC_EXCLUDES[@]}"; do
    echo "  $e"
  done
}

blacklist_add() {
  local pattern="$1"
  if [ -z "$pattern" ]; then
    echo "Usage: $0 blacklist add <glob-pattern>"
    echo "  e.g. $0 blacklist add 'copilot/**'"
    exit 1
  fi

  # Check if already present (use -F for literal string matching)
  if grep -qF "\"$pattern\"" "$QUARTZ_DIR/quartz.config.ts"; then
    echo "'$pattern' is already in ignorePatterns"
    return
  fi

  # Find the closing bracket of ignorePatterns block
  local start=$(grep -n "^    ignorePatterns:" "$QUARTZ_DIR/quartz.config.ts" | head -1 | cut -d: -f1)
  local close_line=$(tail -n +"$start" "$QUARTZ_DIR/quartz.config.ts" | grep -n "^    \]" | head -1 | cut -d: -f1)
  close_line=$((start + close_line - 1))
  sed -i "${close_line}i \      \"$pattern\"," "$QUARTZ_DIR/quartz.config.ts"
  echo "Added '$pattern' to ignorePatterns"
}

blacklist_rm() {
  local pattern="$1"
  if [ -z "$pattern" ]; then
    echo "Usage: $0 blacklist rm <glob-pattern>"
    echo "  e.g. $0 blacklist rm 'copilot/**'"
    exit 1
  fi

  local line=$(grep -nF "\"$pattern\"" "$QUARTZ_DIR/quartz.config.ts" | head -1 | cut -d: -f1)
  if [ -z "$line" ]; then
    echo "'$pattern' not found in ignorePatterns"
    return
  fi

  sed -i "${line}d" "$QUARTZ_DIR/quartz.config.ts"
  echo "Removed '$pattern' from ignorePatterns"
}

cmd_sync() {
  local dry="$1"

  local rsync_args=(-av --delete)
  for excl in "${RSYNC_EXCLUDES[@]}"; do
    rsync_args+=(--exclude="$excl")
  done
  [ -n "$dry" ] && rsync_args+=(--dry-run)

  echo "Syncing from vault...${dry:+ (dry-run)}"
  echo "  Source: $VAULT_PATH"
  echo "  Dest:   $QUARTZ_DIR/content"
  echo ""

  rsync "${rsync_args[@]}" "$VAULT_PATH/" "$QUARTZ_DIR/content/"
}

cmd_deploy() {
  local dry="$1"

  if [ -n "$dry" ]; then
    echo "[DRY-RUN] Would perform the following:"
    echo "  1. rsync vault -> content"
    echo "  2. git add -A"
    echo "  3. git commit"
    echo "  4. git push"
    echo ""
    cmd_sync "1"
    echo ""
    echo "[DRY-RUN] Pending git changes:"
    cd "$QUARTZ_DIR" && git diff --stat
    echo ""
    echo "[DRY-RUN] No changes were made."
    return
  fi

  cmd_sync ""
  cd "$QUARTZ_DIR"
  git add -A
  git commit -m "update notes $(date +%Y-%m-%d)" || echo "Nothing to commit"
  git push
}

cmd_serve() {
  cd "$QUARTZ_DIR"
  npx quartz build --serve
}

case "${1:-help}" in
  sync)
    shift
    case "$1" in
      -n|--dry-run) cmd_sync "1" ;;
      *)            cmd_sync "" ;;
    esac
    ;;
  deploy)
    shift
    case "$1" in
      -n|--dry-run) cmd_deploy "1" ;;
      *)            cmd_deploy "" ;;
    esac
    ;;
  blacklist)
    shift
    case "${1}" in
      add) shift; blacklist_add "$@" ;;
      rm)  shift; blacklist_rm "$@" ;;
      ls)  blacklist_ls ;;
      *)   echo "Usage: $0 blacklist {add|rm|ls} [pattern]" ;;
    esac
    ;;
  serve)
    cmd_serve
    ;;
  help|*)
    echo "Usage: $0 <command> [options]"
    echo ""
    echo "Commands:"
    echo "  sync [-n|--dry-run]    Copy vault notes into content/"
    echo "  deploy [-n|--dry-run]  Sync, commit, and push to GitHub"
    echo "  serve                  Build and preview at localhost:8080"
    echo "  blacklist add <glob>   Add folder/pattern to ignore list"
    echo "  blacklist rm <glob>    Remove folder/pattern from ignore list"
    echo "  blacklist ls           List all ignored folders/patterns"
    echo "  help                   Show this message"
    ;;
esac
