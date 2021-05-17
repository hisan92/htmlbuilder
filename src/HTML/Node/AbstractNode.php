<?php

namespace HTMLBuilder\HTML\Node;

use HTMLBuilder\HTML\Traits\HasParent;
use HTMLBuilder\HTML\Traits\IsClonable;
use HTMLBuilder\HTML\Traits\IsRenderable;
use HTMLBuilder\HTML\Traits\IsUnique;

abstract class AbstractNode
{
    use IsClonable, IsRenderable, IsUnique, HasParent;
}
