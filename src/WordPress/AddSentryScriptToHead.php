<?php

namespace ObsidianMoon\ProjectUtilities\WordPress;

/**
 * Adds a Sentry.io script to head for WordPress
 */
class AddSentryScriptToHead
{
    /**
     * @param array  $options The Sentry options needed to run.
     * @param string $version Version we want to load in the browser.
     */
    public function __construct(protected array $options = [], protected string $version = '7.25.0')
    {
        add_action('wp_init', [$this, 'addScript']);
    }

    public function addScript(): void
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
