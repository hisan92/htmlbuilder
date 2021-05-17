<?php

namespace HTMLBuilder\HTML\Contracts;

interface IHTMLElement
{
    /**
     * @param  string $tag
     * @param  array $options
     * @param  \HTMLBuilder\HTML\Contracts\IHTMLElement|string ...$children
     *
     * @return static
     */
    public static function create($tag, $options = [], ...$children);

    /**
     * @return string
     */
    public function id();

    /**
     * @return \HTMLBuilder\HTML\Node\AbstractElement
     */
    public function clone();
}
