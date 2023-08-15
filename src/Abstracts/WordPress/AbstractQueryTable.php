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
