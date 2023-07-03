<?php

/**
 * Project Utilities by Obsidian Moon Development
 *
 * A collection of useful code that you can use across several projects.
 *
 * PHP version 8
 *
 * @package   ObsidianMoon\ProjectUtilities
 * @author    Alfonso Martinez <opensaurusrex@gmail.com>
 * @link      https://library.jaggaer.com
 * @copyright 2018-2023 Alfonso Martinez
 * @license   MIT
 * @category  Library
 */

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
