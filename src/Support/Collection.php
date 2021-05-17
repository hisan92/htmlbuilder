<?php

namespace HTMLBuilder\Support;

use ArrayAccess;
use ArrayIterator;
use HTMLBuilder\Support\Contracts\Arrayable;
use HTMLBuilder\Support\Contracts\Jsonable;
use JsonSerializable;

class Collection implements Arrayable, ArrayAccess, Jsonable, JsonSerializable
{
    protected $items = [];

    public function __construct(...$nodes)
    {
        $this->add(...$nodes);
    }

    public function __toString()
    {
        return implode(
            '', array_map(fn ($node) => (string) $node, $this->items)
        );
    }

    /**
     * Get all of the items in the collection.
     *
     * @return array
     */
    public function all()
    {
        return $this->items;
    }

    /**
     * Determine if an item exists in the collection.
     *
     * @param  mixed $node
     *
     * @return bool
     */
    public function contains($node)
    {
        return in_array($node, $this->items);
    }

    /**
     * Count the number of items in the collection.
     *
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * Execute a callback over each item.
     *
     * @param  callable  $callback
     *
     * @return $this
     */
    public function each($callback)
    {
        foreach ($this->items as $node) {
            $callback($node);
        }

        return $this;
    }

    /**
     * Run a filter over each of the items.
     *
     * @param  callable $callback
     *
     * @return static
     */
    public function filter($callback)
    {
        return new static(
            ...array_filter(
                $this->items,
                $callback,
                ARRAY_FILTER_USE_BOTH
            )
        );
    }

    /**
     * Get the first item from the collection passing the given truth test.
     *
     * @param  mixed  $default
     *
     * @return mixed
     */
    public function first($default = null)
    {
        if (! $this->isEmpty())
            return $this->iterator()->current();

        return $default;
    }

    /**
     * Get an item from the collection by key.
     *
     * @param  mixed  $key
     * @param  mixed  $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if ($this->has($key))
            return $this->items[$key];

        return $default;
    }

    /**
     * Determine if an item exists in the collection by key.
     *
     * @param  mixed  $key
     *
     * @return bool
     */
    public function has($key)
    {
        return isset($this->items[$key]);
    }

    /**
     * Determine if the collection is empty or not.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return ! count($this->items);
    }

    /**
     * Get an iterator for the items.
     *
     * @return \ArrayIterator
     */
    public function iterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     * Get the keys of the collection items.
     *
     * @return static
     */
    public function keys()
    {
        return new static(...array_keys($this->items));
    }

    /**
     * Get the last item from the collection.
     *
     * @param  mixed  $default
     *
     * @return mixed
     */
    public function last($default = null)
    {
        if (! $this->isEmpty())
            return $this->reverse()->iterator()->current();

        return $default;
    }

    /**
     * Run a map over each of the items.
     *
     * @param  callable  $callback
     *
     * @return static
     */
    public function map($callback = null)
    {
        return new static(
            ...array_map($callback ?? fn ($el) => $el, $this->items)
        );
    }

    /**
     * Merge the collection with the given items.
     *
     * @param  mixed  $nodes
     *
     * @return static
     */
    public function merge(...$nodes)
    {
        return new static(...array_merge($this->items, $nodes));
    }

    /**
     * Get and remove the last item from the collection.
     *
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->items);
    }

    /**
     * Add an item to the collection.
     *
     * @param  mixed  $nodes
     *
     * @return $this
     */
    public function add(...$nodes)
    {
        foreach ($nodes as $node) {
            if (! $this->contains($node))
                array_push($this->items, $node);
        }

        return $this;
    }

    /**
     * Remove an item from the collection.
     *
     * @param  mixed  $node
     *
     * @return $this
     */
    public function remove($node)
    {
        $this->items = array_filter(
            $this->items,
            fn ($el) => $el !== $node,
            ARRAY_FILTER_USE_BOTH
        );

        return $this;
    }

    /**
     * Reverse items order.
     *
     * @return static
     */
    public function reverse()
    {
        return new static(...array_reverse($this->items));
    }

    /**
     * Search the collection for a given value and return the corresponding key if successful.
     *
     * @param  mixed  $needle
     * @param  bool  $strict
     * @return int|false
     */
    public function search($needle, $strict = false)
    {
        if (! is_callable($needle))
            return array_search($needle, $this->items, $strict);

        foreach ($this->items as $key => $value) {
            if ($needle($value, $key))
                return $key;
        }

        return false;
    }

    /**
     * Get and remove the first item from the collection.
     *
     * @return mixed
     */
    public function shift()
    {
        return array_shift($this->items);
    }

    /**
     * Slice the underlying collection array.
     *
     * @param  int  $offset
     * @param  int|null  $length
     *
     * @return static
     */
    public function slice($offset, $length = null)
    {
        return new static(...array_slice($this->items, $offset, $length));
    }

    /**
     * Splice a portion of the underlying collection array.
     *
     * @param  int  $offset
     * @param  int|null  $length
     * @param  mixed  $replacement
     *
     * @return static
     */
    public function splice($offset, $length = null, $replacement = [])
    {
        return new static(...array_splice($this->items, $offset, $length, $replacement));
    }

    public function unshift(...$nodes)
    {
        foreach ($nodes as $node) {
            if (! $this->contains($node))
                array_unshift($this->items, $node);
        }

        return $this;
    }

    /**
     * Reset the keys on the underlying array.
     *
     * @return static
     */
    public function values()
    {
        return new static(...array_values($this->items));
    }

    /**
     * Get the collection of items as a plain array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->map(
            fn ($node) => isArrayable($node) ? $node->toArray() : $node
        )->all();
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->jsonSerialize());
    }

    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed  $key
     *
     * @return bool
     */
    public function offsetExists($key)
    {
        return isset($this->items[$key]);
    }

    /**
     * Get an item at a given offset.
     *
     * @param  mixed  $key
     *
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->items[$key];
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     *
     * @return void
     */
    public function offsetSet($key, $value)
    {
        if (is_null($key))
            $this->items[] = $value;
        else
            $this->items[$key] = $value;
    }

    /**
     * Unset the item at a given offset.
     *
     * @param  string  $key
     *
     * @return void
     */
    public function offsetUnset($key)
    {
        unset($this->items[$key]);
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_map(function ($node) {
            if (isSerializable($node))
                return $node->jsonSerialize();

            if (isJsonable($node))
                return $node->toJson();

            if (isArrayable($node))
                return $node->toArray();

            return $node;
        }, $this->all());
    }
}
