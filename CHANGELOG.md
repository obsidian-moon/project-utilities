Changelog for Project Utilities
===============================

### Version 0.5.0

#### Features
* Added `ObsidianMoon\ProjectUtilities\Traits\WordPress\AddJFIFMimeTypeTrait`.
* Added additional documentation for various sections of the code.

#### Breaking Changes
* Moved `ObsidianMoon\ProjectUtilities\Interfaces\Post\CustomMetaDataInterface` to
  `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts\CustomMetaDataInterface`.
* Changed `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks\BlockTypeRegisterInterface::handle(): void` to
  `registerBlockType(): void` to be more consistent with naming.

#### Bug Fixes
* Corrected the `CHANGELOG.md`: `0.4.0` to match correct naming of interfaces, and `0.3.3` for grammar.

### Version 0.4.0

#### Features
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks\BlockTypeRegisterInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks\BlockTypeCallbackInterface`.

### Version 0.3.3

#### Bug Fixes
* Fixing an issue with autoload, due to the conflicts that were merged in last patch.
* Actually updating the dependencies since that didn't get included for some reason.

### Version 0.3.2

#### Features
* Added `ObsidianMoon\ProjectUtilities\Interfaces\Post\CustomMetaDataInterface`.

### Version 0.3.1

#### Breaking Changes
* Removing `addSentry` method from WordPress Sentry classes, must call them from init callback.
* Added a shorthand for `init` into `AddSentryToHead`, if you don't want to use another version or script name.

### Version 0.3.0

#### Features
* Added `ObsidianMoon\ProjectUtilities\Traits\ParseUrlHelperTrait` to add some methods for handling URLs.

### Version 0.2.1

#### Bug Fixes
* Double init calls were causing system to not see add script functions. Removed the `init` action hook and made the
  functions into callbacks called `addSentry`.

### Version 0.2.0

#### Features
* Added `ObsidianMoon\ProjectUtilities\WordPress\AddSentryScriptToHead` to handle adding `Sentry.io` to header on
  `wp_init` in WordPress.
* Added `ObsidianMoon\ProjectUtilities\WordPress\AddSentryToPlugin` to handle running Sentry from PHP in WordPress.

### Version 0.1.0

#### Features
* Added `InlineScriptParserTrait` for passing data to JS to `JSON.parse()`.
