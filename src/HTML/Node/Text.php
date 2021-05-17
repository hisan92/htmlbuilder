<?php

namespace HTMLBuilder\HTML\Node;

use HTMLBuilder\HTML\Contracts\TextElement;

final class Text extends AbstractNode implements TextElement
{
    /**
     * @var string
     */
    private $text;

    /**
     * @param string $text
     */
    protected function __construct($text = null)
    {
        $this->id   = static::hashid();
        $this->textContent($text);
    }

    public function __toString()
    {
        return $this->text;
    }

    public function textContent($value = null)
    {
        if (! $value) {
            return $this->text;
        }

        $this->text = static::parseContent($value);

        return $this;
    }

    /**
     * Create a new TextElement.
     *
     * @param  string $textContent
     *
     * @return static
     */
    public static function create($textContent = null)
    {
        return new static($textContent);
    }

    private static function parseContent($text)
    {
        return htmlentities(trim($text));
    }
}
