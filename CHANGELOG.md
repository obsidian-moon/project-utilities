Changelog for Project Utilities
===============================

### Version 0.4.0

* Added `ObsidianMoon\ProjectUtilities\Interfaces\Blocks\WordPressBlockTypeInterface`
* Added `ObsidianMoon\ProjectUtilities\Interfaces\Blocks\WordPressBlockTypeCallbackInterface`

### Version 0.3.3

* Fixing an issue with the autoloading, due to the conflicts that were merged in last patch.
* Actually updating the dependencies since that didn't get included for some reason.

### Version 0.3.2

* Added `ObsidianMoon\ProjectUtilities\Interfaces\Post\CustomMetaDataInterface`

### Version 0.3.1

* Removing `addSentry` method from WordPress Sentry classes, must call them from init callback.
* Added a shorthand for `init` into `AddSentryToHead`, if you don't want to use another version or script name.

### Version 0.3.0

* Added `ObsidianMoon\ProjectUtilities\Traits\ParseUrlHelperTrait` to add some methods for handling URLs.

### Version 0.2.1

* Double init calls were causing system to not see add script functions. Removed the `init` action hook and made the
  functions into callbacks called `addSentry`.

### Version 0.2.0

* Added `ObsidianMoon\ProjectUtilities\WordPress\AddSentryScriptToHead` to handle adding `Sentry.io` to header on
  `wp_init` in WordPress.
* Added `ObsidianMoon\ProjectUtilities\WordPress\AddSentryToPlugin` to handle running Sentry from PHP in WordPress.

### Version 0.1.0

* Added `InlineScriptParserTrait` for passing data to JS to `JSON.parse()`.\
