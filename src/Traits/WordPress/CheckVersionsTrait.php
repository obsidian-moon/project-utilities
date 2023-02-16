<?php

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress;

trait CheckVersionsTrait
{


    /**
     * Check versions
     *
     * Check to see if the WordPress, being installed to, meets the minimum
     * requirements for the plugin. This is done before we run the plugin, so
     * that it does not error out due to using features that are not supported
     * by PHP 5.
     *
     * @param string $wp  WordPress version to check
     * @param string $php PHP version to check
     */
    public function checkPluginVersions(
        string $wp = '6.0',
        string $php = '8.0.0',
        string $pluginFile = '/Plugin.php' // Name of file that loads plugin
    ): void {
        global $wp_version;

        if (version_compare(PHP_VERSION, $php, '<')) {
            $flag = 'PHP';
        } elseif (version_compare($wp_version, $wp, '<')) {
            $flag = 'WordPress';
        } else {
            return;
        }
        $version = 'PHP' === $flag ? $php : $wp;

        if (function_exists('deactivate_plugins')) {
            deactivate_plugins(basename(dirname(__DIR__) . $pluginFile));
        }

        wp_die(
            sprintf(
                '<p>The <strong>%s</strong> requires %s version % or greater.</p>',
                OBSIDIAN_PLUGIN_NAME,
                $flag,
                $version
            ),
            __('Plugin Activation Error', OBSIDIAN_PLUGIN_GROUP),
            ['response' => 200, 'back_link' => true]
        );
    }
}
