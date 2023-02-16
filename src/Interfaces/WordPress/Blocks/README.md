`ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks`
=========================================================

Interfaces to ensure a consistent methodology when coding for anything pertaining to WordPress Blocks.

`BlockTypeCallbackInterface`
----------------------------

Callback for Registering Block Type

Ensures that all classes wrapping a `register_block_type()` use `showBlock` method as a callback.

`BlockTypeRegisterInterface`
----------------------------

Register Block Type Method

Ensure we use a consistent method for wrapping `register_block_type()`.

Usage:
------

````php
use ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks\BlockTypeCallbackInterface
use ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks\BlockTypeRegisterInterface

class MemberDetailsBlock implements BlockTypeCallbackInterface, BlockTypeRegisterInterface
{
    /**
     * Wrapped Registration of Meta
     */
    public function addMetaData(): void
    {
        /**
         * Create Meta for Post Type(s)
         */
        register_meta('post', OBSIDIAN_PLUGIN_PREFIX . 'first_name', [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ]);
        // ...
    }
}
````
Adds a method which can be used to wrap groups of `register_meta()` calls.
