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

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Taxonomy;

/**
 * Interface TaxonomyValidationInterface
 *
 * Provides a structure for the classes that will validate taxonomies.
 *
 * @package ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Taxonomy
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2023-07-03
 */
interface TaxonomyValidationInterface
{

    /**
     * Checking if there is a term value being sent
     *
     * @param string $term_id The ID of the taxonomy term
     */
    public function hasValue(string $term_id);

    /**
     * Checking if the taxonomy term already exists
     *
     * @param string $term_id The ID of the Release term
     */
    public function termIsTaken(string $term_id);
}
