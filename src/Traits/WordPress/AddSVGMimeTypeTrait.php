<?php

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress;

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
