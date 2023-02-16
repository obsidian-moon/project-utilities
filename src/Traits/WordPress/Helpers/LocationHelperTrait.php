<?php

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress\Helpers;

/**
 * Trait LocationHelperTrait
 *
 * Adds methods for handling locations in relation to the WordPress installation.
 */
trait LocationHelperTrait
{
    /**
     * Verify URL Format
     *
     * @param string $url URL to check
     *
     * @return string
     */
    public function checkUrl(string $url): string
    {
        return esc_url($url);
    }

    /**
     * Return the root plugin directory
     *
     * @return string
     */
    public function pluginUrl(): string
    {
        $url = plugins_url('/', OBSIDIAN_PLUGIN_ROOT);

        return rtrim($url, '/');
    }

    /**
     * Return the location of a view file specified
     *
     * @param string $viewLocation The location of the view within the plugin
     *
     * @return string
     */
    public function view(string $viewLocation): string
    {
        return OBSIDIAN_PLUGIN_ROOT . '/app/Views/' . $viewLocation . '.php';
    }

    /**
     * Return the file location of an asset
     *
     * This method will return the location that is within the `assets` folder.
     * This can as of v0.2.0 consists of either `css` or `js`. To specify the
     * sub-folder, you include it with the name of the file being called. See
     * the following example:
     *
     * <code>
     * $this->asset('css/releases.css');
     * </code>
     *
     * This will return a value of something like:
     *
     * `/path/to/wordpress/wp-content/plugins/demo-site-plugin/assets/css/releases.css`
     *
     * @param string $filename Asset filename (with or without sub-folder)
     *
     * @return string
     */
    public function asset(string $filename): string
    {
        return OBSIDIAN_PLUGIN_ROOT . '/assets/' . $filename;
    }

    /**
     * Return the url of an asset
     *
     * This method will return the url location of a file accessible in the `assets`
     * folder and can be used as follows:
     *
     * <code>
     * $this->webAsset('css/releases.css')
     * </code>
     *
     * This will return a value of something like:
     *
     * `https://www.demosite.org/wp-content/plugins/demo-site-plugin/assets/css/releases.css`
     *
     * @param string $filename Filename being returned
     *
     * @return string
     */
    public function webAsset(string $filename): string
    {
        return OBSIDIAN_PLUGIN_URI . '/assets/' . $filename;
    }

    /**
     * Return the url of an upload
     *
     * This method will return the url location of a file accessible in the `assets`
     * folder and can be used as follows:
     *
     * <code>
     * $this->webUpload('ReleaseOverview.pdf')
     * </code>
     *
     * This will return a value of something like:
     *
     * `https://www.demosite.org/wp-content/uploads/ReleaseOverview.pdf`
     *
     * @param string $filename Filename being returned
     *
     * @return string
     */
    public function webUpload(string $filename): string
    {
        return OBSIDIAN_UPLOAD_URI . $filename;
    }
}
