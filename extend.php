<?php

/*
 * This file is part of gradba/flarum-media-embed.
 *
 * Flarum's markdown is powered by s9e/TextFormatter, which already ships the
 * full s9e MediaEmbed site catalog. Core just never turns any of it on. This
 * extension enables a curated set of sites via the Formatter extender — the
 * embeds are static, self-contained responsive iframes (no API keys, no
 * per-request HTTP for the common cases).
 *
 * For detailed copyright and license information, see the LICENSE file.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

/**
 * Sites enabled by this extension. Every id here must exist in s9e MediaEmbed's
 * bundled catalog (CachedDefinitionCollection). Add more ids to extend coverage.
 */
const GRADBA_MEDIA_SITES = ['youtube', 'vimeo', 'tiktok'];

return [
    (new Extend\Formatter())
        ->configure(function (Configurator $config) {
            // Accessing $config->MediaEmbed lazily loads the plugin; do NOT guard
            // with isset() (that only reports true once a site is already added,
            // which is the bug that makes "restyle-only" extensions no-op).
            foreach (GRADBA_MEDIA_SITES as $site) {
                $config->MediaEmbed->add($site);
            }
        }),
];
