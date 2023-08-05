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
    public function hasValue(string $value);

    public function valueExists(string $value);
}
