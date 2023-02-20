<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Database;

interface RunDatabaseQueryInterface
{
    /**
     * Executes the query to be run on database.
     *
     * @return void
     */
    public function runQuery(): void;
}
