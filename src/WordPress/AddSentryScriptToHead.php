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
 * function addSentryCallback() {
 *     if (get_option('sentry_js_enabled')) {
 *         new AddSentryScriptToHead([
 *             'script-name' => 'obsidian-moon-sentry', // Default value, optional.
 *             'init' => [
 *                 'dsn' => get_option('sentry_js_dsn'),
 *                 'release' => PLUGIN_VERSION
 *              ],
 *              'version' => '7.25.0' // Default value, optional.
 *         ]);
 *     }
 * }
 *
 * add_action('init', [$sentryJs, 'addSentryCallback'];
 * ```
 *
 * You can also use a shorthand when creating the AddSentryToHead object for `init`:
 *
 * ```php
 * new AddSentryScriptToHead([
 *     'dsn' => get_option('sentry_js_dsn'),
 *     'release' => PLUGIN_VERSION
 * ]);
 * ```
 *
 * @property array $defaults {
 *     The default options passed to Sentry.
 *
 *     @type string 'script_name' The name of the sentry JS we will use.
 *     @type array  'init'        Values passed to the Sentry script.
 *     @type string 'version'     Version of JS API we will use.
 * }
 */
class AddSentryScriptToHead
{
    protected array $defaults = [
        'script-name' => 'obsidian-moon-sentry',
        'init' => [
            'dsn' => ''
        ],
        'version' => '7.25.0'
    ];
    /**
     * @param array  $options The Sentry options needed to run.
     */
    public function __construct(array $options = [])
    {
        if (!key_exists('init', $options)) {
            $options = [
                'init' => $options
            ];
        }

        $options = array_merge($this->defaults, $options);

        wp_enqueue_script(
            $options['script-name'],
            "https://browser.sentry-cdn.com/{$options['version']}/bundle.min.js",
            [],
            $options['version']
        );
        wp_add_inline_script(
            $options['script-name'],
            'Sentry.init('. json_encode($options['init']).')'
        );
    }
}
