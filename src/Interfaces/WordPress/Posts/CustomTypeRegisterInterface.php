<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts;

/**
 * Let's keep those custom post types all in line.
 */
interface CustomTypeRegisterInterface
{
    public static function registerCustomType(): void;
}
