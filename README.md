# Media Embed for Flarum (`gradba/flarum-media-embed`)

Embeds **YouTube**, **Vimeo** and **TikTok** links in Flarum posts.

Flarum's markdown runs on [s9e/TextFormatter](https://github.com/s9e/TextFormatter),
which already bundles the entire s9e MediaEmbed catalog — Flarum just never turns
any of it on, and the long-standing `s9e/flarum-ext-mediaembed` extension is stuck
on the pre-1.0 core. This extension is a tiny, maintained bridge that enables a
curated set of sites for Flarum 1.8.

- **No API keys, no per-request HTTP** for the common cases — YouTube/Vimeo/TikTok
  URLs are parsed by regex into self-contained, responsive iframes.
- Paste a video URL **on its own line** in a post and it renders as a player.

## Supported sites

| Site | Example |
|---|---|
| YouTube | `https://www.youtube.com/watch?v=…`, `https://youtu.be/…`, shorts |
| Vimeo | `https://vimeo.com/…` |
| TikTok | `https://www.tiktok.com/@user/video/…` |

Add more by appending their s9e site id to `GRADBA_MEDIA_SITES` in `extend.php`
(the full catalog — Twitch, Dailymotion, Spotify, SoundCloud, X/Twitter, etc. —
is already available; no download needed).

## Install

```bash
composer require gradba/flarum-media-embed
php flarum cache:clear
```
Then enable **Media Embed** in Admin → Extensions and recompile assets.

> Enabling only affects **newly posted or edited** content — existing posts keep
> their already-rendered HTML until they're edited.

## Requires

Flarum `^1.8`.

## License

MIT — see [LICENSE](LICENSE).
