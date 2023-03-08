<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Posts;

interface GetMetaDataForInterface
{
    public function getMetaDataFor(mixed $ID): array|null|object;
}
