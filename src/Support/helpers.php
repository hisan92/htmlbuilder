<?php

use HTMLBuilder\Support\Collection;
use HTMLBuilder\Support\Contracts\Arrayable;
use HTMLBuilder\Support\Contracts\Jsonable;

if (! function_exists('array_some')) {
    /**
     * Check if some of elements pass in test.
     *
     * @param callable $predicate
     * @param array $haystack
     * @return bool
     *
     * @throws \TypeError If $predicate is not callable
     * @throws \TypeError If $haystack is not an array
     */
    function array_some($predicate, $haystack)
    {
        throw_unless(is_callable($predicate), TypeError::class, 'RuntimeException: $predicate must be Callable!');
        throw_unless(is_array($haystack), TypeError::class, 'RuntimeException: $haystack must be Array!');

        foreach ($haystack as $key => $value) {
            if (call_user_func($predicate, $value, $key, $haystack)) {
                return true;
            }
        }

        return false;
    }
}

if (! function_exists('throw_if'))
{
    /**
     * Throw the given exception if the given condition is true.
     *
     * @param  bool   $condition
     * @param  \Throwable|string  $exception
     * @param  array  ...$args
     * @return bool
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

if (! function_exists('throw_unless')) {
    /**
     * Throw the given exception unless the given condition is true.
     *
     * @param  bool   $condition
     * @param  \Throwable|string  $exception
     * @param  mixed  ...$args
     * @return bool
     *
     * @throws \Throwable
     */
    function throw_unless($condition, $exception = 'RuntimeException', ...$args)
    {
        throw_if(! $condition, $exception, ...$args);

        return $condition;
    }
}

if (! function_exists('str_camel_to_kebab')) {
    /**
     * Transforms an snakeCase into kebab-case string Eg. fooBar --> foo-bar
     *
     * @param string $string
     * @return string
     */
    function str_camel_to_kebab($string)
    {
        return strtolower(preg_replace('/(?<!^)([A-Z])/', '-\\1', $string));
    }
}

if (! function_exists('str_kebab_to_camel')) {
    /**
     * Transforms an snakeCase into kebab-case string Eg. foo-bar -> fooBar
     *
     * @param string $string
     * @return string
     */
    function str_kebab_to_camel($string)
    {
        return lcfirst(str_replace('-', '', ucwords($string, '-')));
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
