<?php

use HTMLBuilder\Support\Collection;
use HTMLBuilder\Support\Contracts\Arrayable;
use HTMLBuilder\Support\Contracts\Jsonable;

if (! function_exists('throw_if'))
{
    /**
     * Throw the given exception if the given condition is true.
     *
     * @param  mixed  $condition
     * @param  \Throwable|string  $exception
     * @param  array  ...$args
     * @return mixed
     *
     * @throws \Throwable
     */
    function throw_if($condition, $exception = 'RuntimeException', ...$args)
    {
        if ($condition) {
            if (is_string($exception) && class_exists($exception)) {
                $exception = new $exception(...$args);
            }

            throw (
                is_string($exception) ? new RuntimeException($exception) : $exception
            );
        }

        return $condition;
    }
}

if (! function_exists('isCollection'))
{
    function isCollection($object)
    {
        return $object instanceof Collection;
    }
}

if (! function_exists('isSerializable'))
{
    function isSerializable($object)
    {
        return $object instanceof JsonSerializable;
    }
}

if (! function_exists('isJsonable'))
{
    function isJsonable($object)
    {
        return $object instanceof Jsonable;
    }
}

if (! function_exists('isArrayable'))
{
    function isArrayable($object)
    {
        return $object instanceof Arrayable;
    }
}
