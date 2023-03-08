`ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Post`
=========================================================

Interfaces to ensure a consistent methodology when coding for anything pertaining to WordPress posts.

`RegisterMetaDataInterface`
-------------------------

Register Custom Meta

#### Usage:

````php
use ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Post\RegisterMetaDataInterface

class MemberDetails implements RegisterMetaDataInterface
{
    /**
     * Meta Factory
     */
    public function __construct()
    {
        add_action('init', [$this, 'addMetaData']);
    }

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
