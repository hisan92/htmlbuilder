<?php

namespace HTMLBuilder\HTML\Exceptions;

class InvalidElementException extends \RuntimeException
{
    protected $message = 'The provided element tag is not a valid HTML Element.';
}
