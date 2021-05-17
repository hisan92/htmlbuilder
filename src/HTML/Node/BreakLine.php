<?php

namespace HTMLBuilder\HTML\Node;

use HTMLBuilder\HTML\Contracts\IHTMLElement;

final class BreakLine extends AbstractNode implements IHTMLElement
{
    protected $tag = 'br';

    private function __construct()
    {

    }

    public function __toString()
    {
        return "<{$this->tag}>";
    }

    public static function create($tag, $options = [], ...$children)
    {
        return new static;
    }
}
