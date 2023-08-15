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

namespace ObsidianMoon\ProjectUtilities\Traits;

/**
 * Trait InlineScriptParserTrait
 *
 * Inline Script Parser Handler
 *
 * This trait adds the ability to automatically parse data to an inline script, e.g. `wp_add_inline_script()`
 *
 * We pass it as a string so that it can be handled by `JSON.parse()` method in browser after load, which speeds up the
 * load time by a decent amount.
 *
 * Usage:
 *
 * ```php
 * static::getInlineScriptData('nameOfVariable', ['key' => 'value', 'key2' => 'value2'])
 * ```
 *
 * Returns:
 *
 * ```js
 * var nameOfVariable = JSON.parse('{"key": "value", "key2": "value2"}');
 * ```
 *
 * @package ObsidianMoon\ProjectUtilities\Traits
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2023-07-03
 *
 * @property string $name   The name of the variable that we will be saving to.
 * @property mixed  $value  The values that we want to encode into a JSON string.
 * @property string $prefix The prefix that we plan on using before the variable.
 */
trait InlineScriptParserTrait
{
    protected static function getInlineScriptData(string $name, mixed $value, string $prefix = 'var'): string
    {
        return "$prefix $name = JSON.parse('" . addslashes(html_entity_decode(
            json_encode($value),
            ENT_QUOTES,
            'UTF-8'
        )) . "');";
    }
}
