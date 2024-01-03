<?php

/**
 * Obsidian Moon Projects
 *
 * Change this to match the project as needed.
 *
 * PHP version 8
 *
 * @package   ObsidianMoon\WordPress\Plugin
 * @author    Alfonso Martinez <opensaurusrex@gmail.com>
 * @link      https://obsidian-moon.dev
 * @copyright 2024 Obsidian Moon Development
 * @license   Proprietary
 * @category  WordPress
 */

namespace ObsidianMoon\ProjectUtilities\Traits\Helpers;

/**
 * Class StringHelperTrait
 *
 * @package ObsidianMoon\ProjectUtilities\Traits\Helpers
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2024-01-03
 */
trait StringHelperTrait
{
    public function toCamelcase(string $string, string $separator = '_'): string
    {
        return lcfirst(str_replace($separator, '', ucwords($string, $separator)));
    }
}
