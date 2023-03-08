<?php

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
