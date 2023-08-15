<?php

/**
 * Project Utilities by Obsidian Moon Development
 *
 * A collection of useful code that you can use across several projects.
 *
 * PHP version 8
 *
 * @category  Library
 * @package   ObsidianMoon\ProjectUtilities
 * @author    Alfonso Martinez <opensaurusrex@gmail.com>
 * @copyright 2018-2023 Alfonso Martinez
 * @license   MIT
 * @link      https://library.jaggaer.com
 */

namespace ObsidianMoon\ProjectUtilities\Traits\WordPress\Helpers;

use WP_Term;

/**
 * Trait FilterHelperTrait
 *
 * Helpers for filtering different types of data, like taxonomies, etc.
 *
 * @package ObsidianMoon\ProjectUtilities\Traits\WordPress\Helpers
 *
 * @author  Alfonso Martinez <opensaurusrex@gmail.com>
 * @since   2023-07-03
 */
trait FilterHelperTrait
{
    /**
     * Grab only the term_id values
     *
     * In some cases we need to make sure that we only grab the term IDs
     * for use in queries from a collection WP_Term objects. This will single
     * out those term IDs and return them.
     *
     * @param WP_Term[] $terms
     *
     * @return array
     */
    public function getTermIds(array $terms): array
    {
        $values = [];

        foreach ($terms as $term) {
            $values[] = $term->term_id;
        }

        return $values;
    }
}
