<?php

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress;

use ObsidianMoon\ProjectUtilities\WordPress\ThemeCompatibilityError;

trait CheckVersionsTrait
{
    /**
     * @var string $flag What type of failure do we have.
     */
    protected string $flag = '';

    /**
     * Check versions
     *
     * Check to see if the WordPress, being installed to, meets the minimum
     * requirements for the plugin. This is done before we run the plugin, so
     * that it does not error out due to using features that are not supported
     * by PHP 5.
     *
     * @param string $php         PHP version to check
     * @param string $wp          WordPress version to check
     * @param string $pluginName  Name of the plugin/theme
     * @param string $pluginGroup Group name assigned to plugin
     * @param string $pluginFile  Name of the file that loads plugin
     *
     * @return void
     */
    public function checkPluginVersions(
        string $php = '8.0.0',
        string $wp = '6.0',
        string $pluginName = 'Obsidian Plugin',
        string $pluginGroup = 'obsidian-plugin',
        string $pluginFile = '/Plugin.php' // Name of file that loads plugin
    ): void {
        if ($this->hasMinimumVersions($php, $wp)) {
            return;
        }

        $version = 'PHP' === $this->flag ? $php : $wp;

        if (function_exists('deactivate_plugins')) {
            deactivate_plugins(basename(dirname(__DIR__) . $pluginFile));
        }

        wp_die(
            sprintf(
                '<p>The <strong>%s</strong> plugin requires %s version % or greater.</p>',
                $pluginName,
                $this->flag,
                $version
            ),
            __('Plugin Activation Error', $pluginGroup),
            ['response' => 200, 'back_link' => true]
        );
    }

    public function checkThemeVersion(
        string $php = '8.0.0',
        string $wp = '6.0',
        string $themeName = 'Obsidian Theme',
        string $themeGroup = 'obsidian-theme'
    ): void {
        if ($this->hasMinimumVersions($php, $wp)) {
            return;
        }

        $version = 'PHP' === $this->flag ? $php : $wp;

        new ThemeCompatibilityError($php, $wp, $this->flag, $version, $themeName, $themeGroup);
    }

    public function hasMinimumVersions(string $php = '8.0', string $wp = '6.0'): bool
    {
        global $wp_version;

        if (version_compare(PHP_VERSION, $php, '<')) {
            $this->flag = 'PHP';
        } elseif (version_compare($wp_version, $wp, '<')) {
            $this->flag = 'WordPress';
        } else {
            return true;
        }

        return false;
    }
}
