<?php

namespace HTMLBuilder\HTML\Node;

use HTMLBuilder\HTML\Contracts\IHTMLElement;
use HTMLBuilder\HTML\Contracts\Parentable;
use HTMLBuilder\HTML\Exceptions\InvalidElementException;
use HTMLBuilder\HTML\HTML;
use HTMLBuilder\HTML\Node\Text;
use HTMLBuilder\HTML\Property\Style;
use HTMLBuilder\HTML\Traits\HasChildren;

abstract class AbstractElement extends AbstractNode implements IHTMLElement, Parentable
{
    use HasChildren;

    /**
     * Reference the valid attributes the element can accept by default.
     *
     * @var string[]
     */
    private const ATTRIBUTES = [
        'accesskey',
        'autocaptalize',
        // 'class',
        'contenteditable',
        'dir',
        'draggable',
        'enterkeyhint',
        'hidden',
        'id',
        'inputmode',
        'is',
        'itemid',
        'itemprop',
        'itemref',
        'itemtype',
        'lang',
        'nonce',
        'spellcheck',
        // 'style',
        'tabindex',
        'title',
        'translate'
    ];

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var string[]
     */
    protected $classes = [];

    /**
     * @var array
     */
    protected $data = [];

    protected const selfClosed = false;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var \HTMLBuilder\HTML\Property\Style
     */
    protected $style;

    /**
     * Contains specific element attributes can accept by default.
     *
     * @var string[]
     */
    protected $validAttrs = [];

    /**
     * Contains specific element attributes can accept by default, but are obsolete for use.
     *
     * @var string[]
     */
    protected $obsoleteAttrs = [];

    /**
     * Contains specific element attributes should be avoided because may not work.
     *
     * @var string[]
     */
    protected $deprecatedAttrs = [];

    /**
     * @param string $tag
     * @param array $options
     * @param \HTMLBuilder\HTML\Contracts\IHTMLElement|string ...$children
     */
    protected function __construct($tag, $options = [], ...$children)
    {
        $this->id = static::hashid();
        $this->tag = $tag;
        $this->children = new Collection;
        $this->validAttrs = $options['props']['validAttrs'];
        $this->obsoleteAttrs = $options['props']['obsoleteAttrs'];
        $this->deprecatedAttrs = $options['props']['deprecatedAttrs'];

        $this->append(...$children);

        if (isset($options['attributes'])) {
            if (is_array($options['attributes'])) {
                foreach ($options['attributes'] as $attr => $value) {
                    $this->attr($attr, $value);
                }
            }
        }

        if (isset($options['classes'])) {
            if (is_string($options['classes']))
                $this->classes = explode(' ', $options['classes']);
        }

        if (isset($options['style'])) {
            if ($options['style'] instanceof Style)
                $this->style = $options['style'];
            else
                $this->style = new Style($options['style']);
        } else {
            $this->style = new Style;
        }
    }

    public function __clone()
    {
        $this->children = $this->children->clone();
        $this->id = static::hashid();
    }

    public function __toString()
    {
        return "<{$this->tag}"
            . implode(' ', $this->attributes($this->data, 'data-%s="%s"'))
            . implode(' ', $this->attributes($this->attributes))
            . (count($this->classes)
                ? sprintf(' class="%s"', $this->classes()) : '')
            . ($this->style->isDefined()
                ? sprintf(' style="%s"', (string) $this->style) : '') . '>'
            . (string) $this->children
            . (! static::selfClosed ? "</{$this->tag}>" : '')
        ;
    }

    /**
     * Create a new HTML Element instance.
     *
     * @param  string $tag
     * @param  array $options
     * @param  \HTMLBuilder\HTML\Contracts\IHTMLElement ...$children
     *
     * @return static
     *
     * @throws \HTMLBuilder\HTML\Exceptions\InvalidElementException
     */
    public static function create($tag, $options = [], ...$children)
    {
        $validElements = static::getValidElements();

        throw_unless(isset($validElements[$tag]), InvalidElementException::class);

        $props = $validElements[$tag];

        if (is_string($props)) {
            if (class_exists($props))
                return $props::create($props, $tag, $options, $children);
        }

        return $props['selfClosed'] ?
            new InlineElement($tag, $options + compact('props'), ...$children) :
            new static($tag, $options + compact('props'), ...$children)
        ;
    }

    public function getTagName()
    {
        return $this->tag;
    }

    /**
     * @param  string     $name
     * @param  string|int $value
     *
     * @return $this|string|int
     */
    public function attr($name, $value = null)
    {
        if (func_num_args() === 1)
            return $this->getAttribute($name);

        return $this->setAttribute($name, $value);
    }

    public function getAttribute($name)
    {
        if (isset($this->attributes[$name]))
            return $this->attributes[$name];

        return null;
    }

    /**
     * @param  string     $name
     * @param  string|int $value
     *
     * @return $this
     */
    public function setAttribute($name, $value)
    {
        if (   in_array($name, self::ATTRIBUTES)
            || in_array($name, $this->validAttrs)
            || in_array($name, $this->obsoleteAttrs))
            $this->attributes[$name] = $value;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function removeAttribute($name)
    {
        unset($this->attributes[$name]);

        return $this;
    }

    /**
     * @param  string $name
     *
     * @return $this
     */
    public function addClass($name)
    {
        $classes = explode(' ', $name);

        if (count($classes) > 1) {
            foreach ($classes as $class) {
                $this->addClass($class);
            }

            return $this;
        }

        if (! in_array($name, $this->classes))
            array_push($this->classes, $name);

        return $this;
    }

    /**
     * @param  string $name
     *
     * @return $this
     */
    public function removeClass($name)
    {
        $index = array_search($name, $this->classes);

        if ($index !== false)
            array_splice($this->classes, $index, 1);

        return $this;
    }

    /**
     * @param  string $name
     *
     * @return $this
     */
    public function toggleClass($name)
    {
        if (! in_array($name, $this->classes))
            $this->addClass($name);
        else
            $this->removeClass($name);

        return $this;
    }

    public function classes()
    {
        return implode(' ', $this->classes);
    }

    /**
     * Get Style instance.
     *
     * @return \HTMLBuilder\HTML\Property\Style
     */
    public function style()
    {
        return $this->style;
    }

    /**
     * Get/set data-{key} property.
     *
     * @param  string     $name
     * @param  string|int $value
     *
     * @return $this|string
     */
    public function data($name, $value = null)
    {
        if (func_num_args() === 1)
            return $this->data[$name];

        $this->data[$name] = $value;
        return $this;
    }

    /**
     * Insert HTMLElement to the beginning of Node tree.
     *
     * @param  \HTMLBuilder\HTML\Contracts\IHTMLElement|string ...$nodes If argument is string, then will instanciate an TextElement
     *
     * @return $this
     */
    public function prepend(...$nodes)
    {
        // Remove it form previous parent before assign to new parent.
        $this->toggleParent(...$nodes);

        $this->children->unshift(...$nodes);

        return $this;
    }

    /**
     * Insert HTMLElement to the end of Node tree.
     *
     * @param  \HTMLBuilder\HTML\Contracts\IHTMLElement|string ...$nodes If argument is string, then will instanciate an TextElement
     *
     * @return $this
     */
    public function append(...$nodes)
    {
        // Remove it from previous parent before assign to new parent.
        $this->toggleParent(...$nodes);

        $this->children->add(...$nodes);

        return $this;
    }

    /**
     * Insert this Element to the beginning of parent Node tree.
     *
     * @param  \HTMLBuilder\HTML\Contracts\Parentable $node
     *
     * @return $this
     */
    public function prependTo($node)
    {
        $node->prepend($this);

        return $this;
    }

    /**
     * Insert this Element to the end of parent Node tree.
     *
     * @param  \HTMLBuilder\HTML\Contracts\Parentable $node
     *
     * @return $this
     */
    public function appendTo($node)
    {
        $node->append($this);

        return $this;
    }

    /**
     * @param array $attrs
     * @param string $format
     * @return array
     */
    protected function attributes($attrs, $format = '%s="%s"')
    {
        $attributes = [];

        if (count($attrs))
            array_push($attributes, '');

        foreach ($attrs as $attr => $value) {
            array_push($attributes, sprintf($format, $attr, $value));
        }

        return $attributes;
    }

    protected function toggleParent(&...$nodes)
    {
        foreach ($nodes as &$node) {
            if (! isHTMLElement($node))
                $node = Text::create($node);

            if ($node->parent)
                $node->parent->children()->remove($node);

            $node->parent = $this;
        }
    }

    private static function getValidElements()
    {
        return array_merge(HTML::BLOCK_ELEMENTS, HTML::INLINE_ELEMENTS);
    }
}
