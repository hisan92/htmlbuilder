<?php

namespace HTMLBuilder\HTML\Traits;

trait IsClonable
{
    /**
     * @return \HTMLBuilder\HTML\Node\AbstractElement
     */
    public function clone()
    {
        return clone $this;
    }
}
