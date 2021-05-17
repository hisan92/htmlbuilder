<?php

namespace HTMLBuilder\HTML\Traits;

trait HasParent
{
    /**
     * @var \HTMLBuilder\HTML\Contracts\IHTMLElement|null
     */
    protected $parent;

    public function parent()
    {
        return $this->parent;
    }
}
