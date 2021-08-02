<?php

namespace HTMLBuilder\HTML\Exceptions;

class InvalidStylePropertyException extends \RuntimeException
{
    protected $message = 'The provided property is not valid.';
}
