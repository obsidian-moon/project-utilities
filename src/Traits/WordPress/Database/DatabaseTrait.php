<?php

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress\Database;

/**
 * Helps ensure that any classes needing database access can get the appropriate information.
 */
trait DatabaseTrait
{

    /**
     * @var string The CharSet associated with the database
     */
    protected string $charsetCollate;

    /**
     * @var string The prefix for table names
     */
    protected string $databasePrefix;

    /**
     * @var string The SQL query that will be run
     */
    protected string $sql;

    /**
     * @var string The prefix for WordPress table names
     */
    protected string $wpDatabasePrefix;

    /**
     * Get the charset and prefixes.
     */
    public function gatherPrefixes(?string $prefix = null): void
    {
        global $wpdb;

        $this->charsetCollate   = $wpdb->get_charset_collate();
        $this->wpDatabasePrefix = $wpdb->prefix;
        $this->databasePrefix   = $wpdb->prefix . $prefix;
    }
}
