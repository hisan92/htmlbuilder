<?php

namespace HTMLBuilder\HTML\Exceptions;

class InvalidElementException extends \Exception
{
    protected $message = 'The provided element tag is not a valid HTML Element.';
}
