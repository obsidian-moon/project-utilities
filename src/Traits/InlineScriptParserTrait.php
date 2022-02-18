<?php

namespace ObsidianMoon\ProjectUtilities\Traits;

/**
 * Inline Script Parser Handler
 *
 * This trait adds the ability to automatically parse data to an inline script, e.g. `wp_add_inline_script()`
 *
 * Usage:
 *
 * ```php
 * static::getInlineScriptData('nameOfVariable', ['key' => 'value', 'key2' => 'value2'])
 * ```
 *
 * Returns:
 *
 * ```
 * var nameOfVariable = JSON.parse('{"key": "value", "key2": "value2"}');
 * ```
 */
trait InlineScriptParserTrait
{
    protected static function getInlineScriptData(string $name, mixed $value): string
    {
        return "var $name = JSON.parse('" . addslashes(html_entity_decode(
            json_encode($value),
            ENT_QUOTES,
            'UTF-8'
        )) . "');";
    }
}
