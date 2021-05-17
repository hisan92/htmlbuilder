<?php

use HTMLBuilder\HTML\Node\AbstractNode;

if (! function_exists('isHTMLElement')) {
    /**
     * Check if an object is instance of HTMLElement.
     *
     * @param  mixed   $object
     *
     * @return bool
     */
    function isHTMLElement($object)
    {
        return $object instanceof AbstractNode;
    }
}
