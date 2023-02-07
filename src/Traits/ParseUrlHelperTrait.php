<?php

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
