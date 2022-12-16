# project-utilities

## Purpose

This is a project that contains parts of code that I use in several projects and want to be able to have access to it.
In doing so, I also give you access to this and hope that it may help you in your endeavours.

## Installation

```shell
composer require obsidian-moon/project-utilities
```

## Current Features

#### `InlineScriptParserTrait`

<details>
<summary>Click for details:</summary>

Usage:

```php
use ObsidianMoon\ProjectUtilities\Traits\InlineScriptParserTrait;

class YourClass
{
    use InlineScriptParserTrait;

    public function useInlineSomewhere()
    {
        echo static::getInlineScriptData('nameOfVariable', ['key' => 'value', 'key2' => 'value2'])
    }
}
```

  Returns:

  ```js
  var nameOfVariable = JSON.parse('{"key": "value", "key2": "value2"}');
  ```
</details>

#### `AddSentryScriptToHead`

<details>
<summary>Click for details</summary>

Usage:

```php
use ObsidianMoon\ProjectUtilities\WordPress\AddSentryScriptToHead;

function addSentryCallback()
{
   if (get_option('sentry_js_enabled')) {
       new AddSentryScriptToHead([
           'script-name' => 'obsidian-moon-sentry', // Default value, optional.
           'init' => [
               'dsn' => get_option('sentry_js_dsn'),
               'release' => PLUGIN_VERSION
            ],
            'version' => '7.25.0' // Default value, optional.
       ]);
   }
}

add_action('init', 'addSentryCallback');
```

You can also use a shorthand for `init` when creating the `AddSentryToHead` object:

```php
new AddSentryScriptToHead([
    'dsn' => get_option('sentry_js_dsn'),
    'release' => PLUGIN_VERSION
]);
```

</details>

#### `AddSentryToPlugin`

<details>
<summary>Click for details</summary>

```php
use ObsidianMoon\ProjectUtilities\WordPress\AddSentryToPlugin;

function addSentryCallback()
{
    if (get_config('sentry_php_enabled')) {
        new AddSentryToPlugin([
            'dsn' => get_config('sentry_php_dsn'),
            'release' => PLUGIN_VERSION
        ]);
    }
}

add_action('init', 'addSentryCallback');
```
</details>

## License

MIT
