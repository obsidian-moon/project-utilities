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

trait AddJFIFMimeTypeTrait
{
    /**
     * Add the ability to upload JFIF files.
     *
     * Usage:
     *
     * ```php
     * use ObsidianMoon\ProjectUtilities\Traits\WordPress\AddJFIFMimeTypeTrait;
     *
     * // Create a class that loads plugin and include this in its
     * add_filter('mime_types', [$this, 'addJFIFMimeTypes']);
     * add_filter('upload_mimes', [$this, 'addJFIFMimeTypes']);
     * ```
     *
     * @param array $mimes Collection of mimes passed from WordPress.
     *
     * @return array
     */
    public function addJFIFMimeTypes(array $mimes): array
    {
        $mimes['jfif'] = 'image/jpeg';

        return $mimes;
    }
}
