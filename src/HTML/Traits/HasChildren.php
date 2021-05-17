<?php

namespace HTMLBuilder\HTML\Traits;

trait HasChildren
{
    /**
     * @var \HTMLBuilder\HTML\Node\Collection
     */
    protected $children;

    public function children()
    {
        return $this->children;
    }
}
