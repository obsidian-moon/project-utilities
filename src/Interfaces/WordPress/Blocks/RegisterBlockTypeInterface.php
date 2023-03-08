<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks;

/**
 * Register Block Type Method
 *
 * Ensure we use a consistent method for wrapping `register_block_type`.
 */
interface RegisterBlockTypeInterface
{
    public function registerBlockType(): void;
}
