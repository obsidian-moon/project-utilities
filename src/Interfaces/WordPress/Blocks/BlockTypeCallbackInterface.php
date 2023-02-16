<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks;

/**
 * Callback for Registering Block Type
 *
 * Ensures that all classes wrapping a `register_block_type()` use `showBlock` method as a callback.
 */
interface BlockTypeCallbackInterface
{
    public static function showBlock(mixed $attributes = [], mixed $content = null);
}
