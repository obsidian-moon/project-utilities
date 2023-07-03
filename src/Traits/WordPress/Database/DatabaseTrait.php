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
     * gatherPrefixes
     *
     * Get the charset and prefixes.
     *
     * @author Alfonso Martinez <opensaurusrex@gmail.com>
     * @since  2023-07-03
     *
     * @param string|null $prefix
     *
     * @return void
     */
    public function gatherPrefixes(?string $prefix = null): void
    {
        global $wpdb;

        $this->charsetCollate   = $wpdb->get_charset_collate();
        $this->wpDatabasePrefix = $wpdb->prefix;
        $this->databasePrefix   = $wpdb->prefix . $prefix;
    }
}
