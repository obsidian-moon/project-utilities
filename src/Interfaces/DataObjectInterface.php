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

namespace ObsidianMoon\ProjectUtilities\Interfaces;

/**
 * Interface DataObjectInterface
 *
 * An interface to provide structure for data objects.
 *
 * @package ObsidianMoon\ProjectUtilities\Interfaces
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2023-07-05
 */
interface DataObjectInterface
{
    public function getAll(): array|null|object;

    public function getByID(int|string $id): DataObjectInterface|false;

    public function getDataObject(): object;
}
