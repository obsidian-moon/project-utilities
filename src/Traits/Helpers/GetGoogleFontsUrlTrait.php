<?php

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
