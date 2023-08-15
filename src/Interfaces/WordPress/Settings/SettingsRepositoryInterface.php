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

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Settings;

/**
 * Interface SettingsRepositoryInterface
 *
 * Provides a structure for use with the SettingsRepositoryTrait.
 *
 * @package ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Settings
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2023-07-03
 */
interface SettingsRepositoryInterface
{
    /**
     * Update the settings in the database.
     *
     * @return void
     */
    public function save(): void;

    /**
     * Read the value of a setting.
     *
     * @param string $name Name of the setting to read.
     *
     * @return mixed
     */
    public function __get(string $name): mixed;

    /**
     * Check for existence of a setting.
     *
     * @param string $name Name of the setting to check for.
     *
     * @return bool
     */
    public function __isset(string $name): bool;

    /**
     * Update the value of a setting with new value.
     *
     * @param string $name  Name of the setting being saved.
     * @param mixed  $value Value of the setting being saved.
     *
     * @return void
     */
    public function __set(string $name, mixed $value): void;

    /**
     * Delete a setting from the repository.
     *
     * @param string $name Name of the setting being deleted.
     *
     * @return void
     */
    public function __unset(string $name): void;
}
