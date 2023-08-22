Changelog for Project Utilities
===============================

### Version 0.6.1

#### Features
* Adding `wpPosts`, `wpPostmeta`, `wpUsers`, `wpUsermeta`, and `wpOptions` to
  `ObsidianMoon\ProjectUtilities\Traits\WordPress\Database\DatabaseTrait`.

### Version 0.6.0

#### Features
* Adding additional documentation via `README.md` files so that users can view them via GitHub sources.
* Updated the composer dependencies.
* Added `ObsidianMoon\ProjectUtilities\Traits\WordPress\Settings\SettingsRepositoryTrait`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\DataObjectInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\Validation\DataObjectValidationInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\Validation\TaxonomyValidationInterface`.

### Version 0.5.2

#### Features
* Added `string $prefix = 'var'` property to `ObsidianMoon\ProjectUtilities\Traits\InlineScriptParserTrait`.

### Version 0.5.1

#### Bug Fixes
* Corrected an issue where I installed composer libraries using system php 8.1 which made the platform requirement too
  high for what I was trying to support. This has been corrected.

### Version 0.5.0

#### Features
* Added `ObsidianMoon\ProjectUtilities\Abstracts\WordPress\AbstractQueryTable`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Database\RunDatabaseQueryInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts\GetMetaDataInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts\GetMetaDataForInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts\RegisterCustomTypeInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Roles\ModifyUserRoleInterface`.
* Added `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Settings\SettingsRepositoryInterface`.
* Added `ObsidianMoon\ProjectUtilities\Traits\Helpers\GetGoogleFontsUrlTrait`.
* Added `ObsidianMoon\ProjectUtilities\Traits\WordPress\Helpers\GetThumbnailUriTrait`.
* Added `ObsidianMoon\ProjectUtilities\Traits\WordPress\AddJFIFMimeTypeTrait`.
* Added `ObsidianMoon\ProjectUtilities\Traits\WordPress\AddSVGMimeTypeTrait`.
* Added `ObsidianMoon\ProjectUtilities\Traits\WordPress\CheckVersionsTrait`.
* Added `ObsidianMoon\ProjectUtilities\WordPress\ThemeCompatibilityError`.
* Added additional documentation for various sections of the code.

#### Breaking Changes
* Moved `ObsidianMoon\ProjectUtilities\Interfaces\Post\CustomMetaDataInterface` to
  `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts\RegisterMetaDataInterface`.
* Renamed `ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks\BlockTypeRegisterInterface` to
  `RegisterBlockTypeInterface`.
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
