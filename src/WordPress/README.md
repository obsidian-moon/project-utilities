`ObsidianMoon\ProjectUtilities\WordPress`
=========================================

Classes that are used to add features to WordPress.

`AddSentryScriptToHead`
-----------------------

Adds a Sentry.io script to head for WordPress during load of the page.

### Usage:

```php
use ObsidianMoon\ProjectUtilities\WordPress\AddSentryScriptToHead;

function addSentryCallback() {
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

add_action('init', [$sentryJs, 'addSentryCallback'];
```

You can also use a shorthand when creating the AddSentryToHead object for `init`:

```php
new AddSentryScriptToHead([
    'dsn' => get_option('sentry_js_dsn'),
    'release' => PLUGIN_VERSION
]);
```

Sentry
------

Adds Sentry to runtime PHP and makes sure that Sentry is being loaded into WordPress during initialization.

### Usage:

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

add_action('init', 'addSentry');
```
