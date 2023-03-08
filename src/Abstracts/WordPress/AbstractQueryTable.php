<?php

namespace ObsidianMoon\ProjectUtilities\Abstracts\WordPress;

use ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Database\RunDatabaseQueryInterface;
use ObsidianMoon\ProjectUtilities\Traits\WordPress\Database\DatabaseTrait;

/**
 * Class AbstractQueryTable
 *
 * Base class for all classes that will need to modify the database directly.
 */
abstract class AbstractQueryTable implements RunDatabaseQueryInterface
{
    use DatabaseTrait;

    protected string $sql;

    public function __construct(string $prefix)
    {
        $this->gatherPrefixes($prefix);
    }

    public function runQuery(): void
    {
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($this->sql);
    }
}
