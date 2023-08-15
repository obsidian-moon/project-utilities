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

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks;

/**
 * Callback for Registering Block Type
 *
 * Ensures that all classes wrapping a `register_block_type()` use `showBlock` method as a callback.
 */
interface BlockTypeCallbackInterface
{
    public function showBlock(mixed $attributes = [], mixed $content = null);
}
