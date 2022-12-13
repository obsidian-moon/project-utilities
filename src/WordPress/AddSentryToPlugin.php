<?php

namespace ObsidianMoon\ProjectUtilities\WordPress;

use Sentry;

/**
 * Adds Sentry to runtime PHP
 *
 * Make sure that Sentry is being loaded into WordPress during initialization.
 *
 * Usage:
 *
 * ```php
 * use ObsidianMoon\ProjectUtilities\WordPress\AddSentryToPlugin;
 *
 * if (get_config('sentry_php_enabled')) {
 *     $sentryPhp = new AddSentryToPlugin([
 *         'dsn' => get_config('sentry_php_dsn'),
 *         'release' => PLUGIN_VERSION
 *     ]);
 *
 *     add_action('init', [$sentryPhp, 'addSentry'];
 * }
 * ```
 *
 * @property array $options The options passed to Sentry.
 */
class AddSentryToPlugin
{
    /**
     * @param array $options The Sentry options needed to run.
     */
    public function __construct(protected array $options = [])
    {
    }

    /**
     * The callback
     *
     * @return void
     */
    public function addSentry(): void
    {
        Sentry\init($this->options);
    }
}
