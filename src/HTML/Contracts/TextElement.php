<?php

namespace HTMLBuilder\HTML\Contracts;

interface TextElement
{
    /**
     * @param  string $textContent
     *
     * @return self
     */
    public static function create($textContent);

    /**
     * @return string
     */
    public function id();

    /**
     * @return self
     */
    public function clone();
}
