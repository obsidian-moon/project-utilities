<?php

namespace ObsidianMoon\ProjectUtilities\Interfaces\WordPress\Blocks;

interface BlockTypeCallbackInterface
{
    public function showBlock(mixed $attributes = [], mixed $content = null);
}
