<?php

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress\Settings;

trait SettingsRepositoryTrait
{
    /**
     * @var array $options Options stored in the database
     */
    protected array $options;


    /**
     * Get the value of setting
     */
    public function __get(string $name): mixed
    {
        return $this->options[$name] ?? false;
    }

    /**
     * Check if a setting is set
     */
    public function __isset(string $name): bool
    {
        return isset($this->options[$name]);
    }

    /**
     * Set the value of a setting
     */
    public function __set(string $name, mixed $value): void
    {
        $this->options[$name] = $value;
    }

    /**
     * Delete a setting
     */
    public function __unset(string $name): void
    {
        unset($this->options[$name]);
    }
}
