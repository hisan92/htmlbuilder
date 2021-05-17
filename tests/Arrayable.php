<?php

namespace HTMLBuilder\Tests;

use HTMLBuilder\Support\Contracts\Arrayable as Base;

class Arrayable implements Base
{
    public function toArray()
    {
        return [];
    }
}
