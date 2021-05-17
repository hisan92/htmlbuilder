<?php

namespace HTMLBuilder\Tests;

use HTMLBuilder\Support\Contracts\Jsonable as Base;

class Jsonable implements Base
{
    public function toJson()
    {
        return json_encode([]);
    }
}
