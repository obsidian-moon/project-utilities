<?php

namespace ObsidianMoon\ProjectUtilities\Traits;

/**
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
 * @property string $name   The name of the variable that we will be saving to.
 * @property mixed  $value  The values that we want to encode into a JSON string.
 * @property string $prefix The prefix that we plan on using before the variable.
 *
 * @returns string
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
