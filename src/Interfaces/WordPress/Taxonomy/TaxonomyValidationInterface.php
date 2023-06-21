<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Taxonomy;

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
