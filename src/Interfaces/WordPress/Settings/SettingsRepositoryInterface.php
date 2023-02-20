<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Settings;

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
