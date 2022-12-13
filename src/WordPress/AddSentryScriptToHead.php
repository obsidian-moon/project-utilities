<?php

namespace ObsidianMoon\ProjectUtilities\WordPress;

/**
 * Adds a Sentry.io script to head for WordPress
 *
 * Make sure that Sentry is being loaded into WordPress during load of the page.
 *
 * Usage:
 *
 * ```php
 * use ObsidianMoon\ProjectUtilities\WordPress\AddSentryScriptToHead;
 *
 * if (get_option('sentry_js_enabled')) {
 *     $sentryJs = new AddSentryScriptToHead(
 *         [
 *             'dsn' => get_option('sentry_js_dsn'),
 *             'release' => PLUGIN_VERSION
 *         ],
 *         get_option('sentry_js_version', '7.25.0')
 *     );
 *
 *     add_action('init', [$sentryJs, 'addSentry'];
 * }
 * ```
 *
 * @property array  $options The options passed to Sentry.
 * @property string $version The version of Sentry JS API to user.
 */
class AddSentryScriptToHead
{
    /**
     * @param array  $options The Sentry options needed to run.
     * @param string $version Version we want to load in the browser.
     */
    public function __construct(protected array $options = [], protected string $version = '7.25.0')
    {
    }

    /**
     * The callback
     *
     * @return void
     */
    public function addSentry(): void
    {
        wp_enqueue_script(
            'obsidian-moon-sentry-js',
            "https://browser.sentry-cdn.com/$this->version/bundle.min.js",
            [],
            $this->version
        );
        wp_add_inline_script(
            'obsidian-moon-sentry-js',
            'Sentry.init('. json_encode($this->options).')'
        );
    }

}
