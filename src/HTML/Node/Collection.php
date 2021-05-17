<?php

namespace HTMLBuilder\HTML\Node;

use HTMLBuilder\Support\Collection as BaseCollection;

final class Collection extends BaseCollection
{
    /**
     * @var \HTMLBuilder\HTML\Contracts\IHTMLElement[]
     */
    protected $items = [];

    public function clone()
    {
        return new static(
            ...array_map(fn ($el) => $el->clone(), $this->items)
        );
    }
}
