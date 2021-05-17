<?php

namespace HTMLBuilder\HTML\Traits;

trait IsUnique
{
    /**
     * @var string
     */
    protected $id;

    public function id()
    {
        return $this->id;
    }

    protected static function hashid()
    {
        return substr(sha1(uniqid()), 0, 8);
    }
}
