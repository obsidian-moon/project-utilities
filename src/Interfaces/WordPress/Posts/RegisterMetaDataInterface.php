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

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts;

/**
 * Register Custom Meta
 *
 * Usage:
 *
 * ````php
 * use ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts\CustomMetaDataInterface
 *
 * class MemberDetails implements CustomMetaDataInterface
 * {
 *     // Meta Factory
 *     public function __construct()
 *     {
 *         add_action('init', [$this, 'addMetaData']);
 *     }
 *
 *     // Wrapped Registration of Meta
 *     public function addMetaData(): void
 *     {
 *         // Create Meta(s) for Post
 *         register_meta('post', OBSIDIAN_PLUGIN_PREFIX . 'first_name', [
 *             'show_in_rest' => true,
 *             'single' => true,
 *             'type' => 'string',
 *         ]);
 *         // ...
 *     }
 * }
 * ````
 * Adds a method which can be used to wrap groups of `register_meta()` calls.
 */
interface RegisterMetaDataInterface
{
    public function addMetaData(): void;
}
