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

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress\Helpers;

trait GetThumbnailUriTrait
{
    /**
     * Get the uri of a scaled thumbnail for 150x150.
     *
     * @param string $uri The URL
     *
     * @return string
     */
    public static function getThumbnailUrl(string $uri): string
    {
        $parts = explode('.', str_replace('-scaled', '', $uri));
        $parts[count($parts) - 2] .= '-150x150';

        return implode('.', $parts);
    }
}
