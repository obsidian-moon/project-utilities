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

namespace ObsidianMoon\ProjectUtilities\Traits\Helpers;

trait GetGoogleFontsUrlTrait
{
    public static function getGoogleFontsUrl(array $fontFamilies): string
    {
        $queryArguments = [
            'family' => urlencode(implode('|', $fontFamilies)),
        ];
        $fontsUrl = add_query_arg($queryArguments, 'https://fonts.googleapis.com/css');

        return esc_url_raw($fontsUrl);
    }
}
