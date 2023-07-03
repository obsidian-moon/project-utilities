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

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress;

/**
 * Trait AddSVGMimeTypeTrait
 *
 * Adds SVG support to WordPress when called in function as described below.
 *
 * @package ObsidianMoon\ProjectUtilities\Traits\WordPress
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2023-07-03
 */
trait AddSVGMimeTypeTrait
{
    /**
     * Add the ability to upload SVG files.
     *
     * Usage:
     *
     * ```php
     * use ObsidianMoon\ProjectUtilities\Traits\WordPress\AddSVGMimeTypeTrait;
     *
     * // Create a class that loads plugin and include this in its
     * add_filter('mime_types', [$this, 'addSVGMimeTypes']);
     * add_filter('upload_mimes', [$this, 'addSVGMimeTypes']);
     * ```
     *
     * @param array $mimes Collection of mimes passed from WordPress.
     *
     * @return array
     */
    public function addSVGMimeTypes(array $mimes): array
    {
        $mimes['svg'] = 'image/svg+xml';

        return $mimes;
    }
}
