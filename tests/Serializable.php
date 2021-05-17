<?php

namespace HTMLBuilder\Tests;

class Serializable implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return [];
    }
}
