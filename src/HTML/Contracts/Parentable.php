<?php

namespace HTMLBuilder\HTML\Contracts;

interface Parentable
{
    /**
     * @return \HTMLBuilder\HTML\Node\Collection
     */
    public function children();

    /**
     * @param \HTMLBuilder\HTML\Contracts\IHTMLElement[] $nodes
     *
     * @return self
     */
    public function prepend(...$nodes);

    /**
     * @param \HTMLBuilder\HTML\Contracts\IHTMLElement[] $nodes
     *
     * @return self
     */
    public function append(...$nodes);

    /**
     * @param \HTMLBuilder\HTML\Contracts\IHTMLElement $node
     *
     * @return self
     */
    public function prependTo($node);

    /**
     * @param \HTMLBuilder\HTML\Contracts\IHTMLElement $node
     *
     * @return self
     */
    public function appendTo($node);
}
