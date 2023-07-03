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

namespace ObsidianMoon\ProjectUtilities\Traits;

/**
 * Trait ParseUrlHelperTrait
 *
 * A collection of methods for handling of urls.
 */
trait ParseUrlHelperTrait
{
    /**
     * Convert a slug to Uppercase Words
     *
     * @param string $url URL to check
     *
     * @return string
     */
    public function slugToUpperCaseWords(string $url): string
    {
        $url = trim($url, '/');
        $parts = explode('/', $url);

        return ucwords(str_replace('-', ' ', $parts[1] ?? ''));
    }
}
