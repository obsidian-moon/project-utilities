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
 * function addSentryCallback()
 * {
 *     if (get_config('sentry_php_enabled')) {
 *         new AddSentryToPlugin([
 *             'dsn' => get_config('sentry_php_dsn'),
 *             'release' => PLUGIN_VERSION
 *         ]);
 *     }
 * }
 *
 * add_action('init', 'addSentry');
 * ```
 *
 * @property array $defaults The default options passed to Sentry.
 */
class AddSentryToPlugin
{
    protected array $defaults = [
        'dsn' => ''
    ];

    /**
     * @param array $options The Sentry options needed to run.
     */
    public function __construct(array $options = [])
    {
        $options = array_merge($this->defaults, $options);
        Sentry\init($options);
    }
}
