<?php

namespace ObsidianMoon\ProjectUtilities\WordPress;

use Sentry;

/**
 * Adds Sentry to runtime PHP
 *
 * Make sure that Sentry is being loaded into WordPress during initialization.
 *
 */
class AddSentryToPlugin
{
    /**
     * @param array $options The Sentry options needed to run.
     */
    public function __construct(protected array $options = [])
    {
        add_action('wp_init', [$this, 'addScript']);
    }

    public function addScript(): void
    {
        Sentry\init($this->options);
    }
}
