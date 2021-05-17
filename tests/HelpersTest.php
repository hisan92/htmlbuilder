<?php

namespace HTMLBuilder\Tests;

use HTMLBuilder\Support\Collection;
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function testExpectExceptionCapture()
    {
        $this->expectException(\TypeError::class);

        throw_if(true, 'TypeError');

        $this->expectException(\RuntimeException::class);

        throw_if(true);

        $this->expectExceptionMessage('An intended exception');

        throw_if(true, new \Exception('An intended exception'));
    }

    public function testCheckIfIsCollection()
    {
        $collection = new Collection;

        $this->assertTrue(isCollection($collection));

        $this->assertFalse(isCollection([]));
    }

    public function testCheckIfIsArrayableObject()
    {
        $collection = new Collection;

        $this->assertTrue(isArrayable($collection));

        $this->assertFalse(isArrayable([]));
    }

    public function testCheckIfIsSerializableObject()
    {
        $collection = new Collection;

        $this->assertTrue(isSerializable($collection));

        $this->assertFalse(isSerializable([]));
    }
}
