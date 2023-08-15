<?php

/**
 * Project Utilities by Obsidian Moon Development
 *
 * A collection of useful code that you can use across several projects.
 *
 * PHP version 8
 *
 * @package   ObsidianMoon\ProjectUtilities
 * @author    Alfonso Martinez <opensaurusrex@gmail.com>
 * @link      https://library.jaggaer.com
 * @copyright 2018-2023 Alfonso Martinez
 * @license   MIT
 * @category  Library
 */

namespace ObsidianMoon\ProjectUtilities\WordPress;

use JetBrains\PhpStorm\NoReturn;

/**
 * Class ThemeCompatibilityError
 *
 * For making sure that the theme or plug is compatible with the version of PHP & WP that is installed.
 *
 * @package ObsidianMoon\ProjectUtilities\WordPress
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2023-07-03
 */
class ThemeCompatibilityError
{
    protected string $currentVersion = '';

    /**
     * @param string $php        Version of PHP.
     * @param string $wp         Version of WordPress.
     * @param string $flag       Flag of what is not meeting requirements.
     * @param string $version    Version required.
     * @param string $themeName  Name of the theme.
     * @param string $themeGroup Group name of settings and i18n.
     */
    public function __construct(
        protected string $php,
        protected string $wp,
        protected string $flag = '',
        protected string $version = '',
        protected string $themeName = 'Obsidian Theme',
        protected string $themeGroup = 'obsidian-theme'
    ) {
        global $wp_version;

        $this->currentVersion = 'PHP' === $this->flag ? PHP_VERSION : $wp_version;
        add_action('after_switch_theme', [$this, 'switchTheme']);
        add_action('load-customize.php', [$this, 'customize']);
        add_action('template_redirect', [$this, 'preview']);
    }

    /**
     * Prevents the Customizer from being loaded on WordPress versions prior to 5.8.
     *
     * @since 1.1
     *
     * @global string $wp_version WordPress version.
     */
    #[NoReturn]
    public function customize(): void
    {
        wp_die(
            sprintf(
                __(
                    'The ' . $this->themeName . ' theme requires at least WordPress version ' . $this->version
                    . '. You are running version %s. Please upgrade and try again.'
                ),
                $GLOBALS['wp_version']
            ),
            '',
            ['back_link' => true,]
        );
    }

    /**
     * Prevents the Theme Preview from being loaded on WordPress versions prior to 5.8.
     *
     * @since 1.1
     *
     * @global string $wp_version WordPress version.
     */
    public function preview(): void
    {
        if (isset($_GET['preview'])) {
            wp_die(
                sprintf(
                    __(
                        'The ' . $this->themeName . ' theme requires at least WordPress version '
                        . $this->version . '. You are running version %s. Please upgrade and try again.'
                    ),
                    $GLOBALS['wp_version']
                )
            );
        }
    }

    /**
     * Prevent switching to JAGGAER Library Theme on old versions of WordPress.
     *
     * Switches to the default theme.
     *
     * @since 1.1
     */
    public function switchTheme(): void
    {
        switch_theme(WP_DEFAULT_THEME);
        unset($_GET['activated']);
        add_action('admin_notices', [$this, 'upgradeNotice']);
    }

    /**
     * Adds a message for unsuccessful theme switch.
     *
     * Prints an update nag after an unsuccessful attempt to switch to
     * JAGGAER Library Theme on WordPress versions prior to 5.8.
     *
     * @since 1.1
     *
     * @global string $wp_version WordPress version.
     */
    public function upgradeNotice(): void
    {
        $message = sprintf(
            __(
                'The %s theme requires at least version %s of %s. You are running version %s.'
                . ' Please upgrade and try again.'
            ),
            $this->themeName,
            $this->version,
            $this->flag,
            $this->currentVersion
        );
        printf('<div class="error"><p>%s</p></div>', $message);
    }
}
