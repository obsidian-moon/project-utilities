<?php

/**
 * PHP version 8
 *
 * @package   JAGGAER\LibraryPlugin
 * @author    Alfonso Martinez <opensaurusrex@gmail.com>
 * @link      https://library.jaggaer.com
 * @copyright 2018-2023 JAGGAER
 * @license   Proprietary
 * @category  WordPress
 */

namespace ObsidianMoon\ProjectUtilities\Interfaces\Validation;

use ObsidianMoon\ProjectUtilities\Interfaces\DataObjectInterface;

/**
 * Interface DataObjectValidationInterface
 *
 * @package ObsidianMoon\ProjectUtilities\Interfaces\Validation
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   8/5/2023
 */
interface DataObjectValidationInterface
{
    public function valueIsNotEmpty(string $value);

    public function valueExists(mixed $value, DataObjectInterface $dataObject);
}
