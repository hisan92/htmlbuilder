<?php

namespace HTMLBuilder\Tests;

use HTMLBuilder\Support\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testCreateCollection()
    {
        $collection = new Collection;

        $this->assertTrue(isCollection($collection));
    }

    public function testAddItemsToCollection()
    {
        $collection = new Collection('foo', 'bar');

        $this->assertEquals(2, $collection->count());

        $collection->add('baz');

        $this->assertEquals(3, $collection->count());
    }

    public function testMapItemsInCollection()
    {
        $collection = new Collection('foo', 'bar');

        $this->assertEquals(['foo', 'bar'], $collection->map()->all());
    }

    public function testIterateOverEachItem()
    {
        $items = [];
        $collection = new Collection('foo', 'bar');

        $collection->each(function ($el) use (&$items) {
            $items[] = $el;
        });

        $this->assertEquals(['foo', 'bar'], $items);
    }

    public function testMergeItemsInCollection()
    {
        $collection = new Collection('foo');

        $collection = $collection->merge('bar');

        $this->assertEquals(['foo', 'bar'], $collection->all());
    }

    public function testSerializeCollection()
    {
        $collection = new Collection('foo', 'bar');
        $items = ['foo', 'bar'];

        $serialize = json_encode($items);

        $this->assertEquals($items, $collection->toArray());
        $this->assertEquals($serialize, $collection->toJson());
    }

    public function testCheckIfItemExistsInCollection()
    {
        $collection = new Collection('lorem', 'ipsum');

        $this->assertTrue($collection->contains('lorem'));
        $this->assertTrue($collection->contains('ipsum'));
        $this->assertFalse($collection->contains('dolor'));
        $this->assertNotFalse($collection->search('ipsum'));
        $this->assertNotFalse($collection->search(function ($el) {
            return $el === 'ipsum';
        }));

        $this->assertFalse($collection->search(function ($el) {
            return $el === 'dolor';
        }));
    }

    public function testRemoveFirstAndLastItemOfCollection()
    {
        $collection = new Collection('lorem', 'ipsum', 'dolor');

        $this->assertEquals('lorem', $collection->shift());
        $this->assertEquals('dolor', $collection->pop());
        $this->assertEquals(1, $collection->count());
    }

    public function testPickItemWithDefaultValue()
    {
        $collection = new Collection;

        $this->assertEquals('lorem', $collection->first('lorem'));
        $this->assertEquals('ipsum', $collection->get(0, 'ipsum'));
        $this->assertEquals('dolor', $collection->last('dolor'));
    }

    public function testPickItemOnStarMidEndOfCollection()
    {
        $items = ['lorem', 'ipsum', 'dolor'];
        $collection = new Collection(...$items);

        $this->assertEquals($items[0], $collection->first());
        $this->assertEquals($items[1], $collection->get(1));
        $this->assertEquals($items[2], $collection->last());
    }

    public function testRetriveCollectionKeys()
    {
        $collection = new Collection('lorem', 'ipsum', 'dolor');

        $this->assertEquals([0, 1, 2], $collection->keys()->all());
    }

    public function testRetriveCollectionValues()
    {
        $items = ['lorem', 'ipsum', 'dolor'];
        $collection = new Collection(...$items);

        $this->assertEquals($items, $collection->values()->all());
    }

    public function testRetriveOneItemInCollection()
    {
        $collection = new Collection('ipsum', 'lorem', 'dolor');

        $collection = $collection->filter(function ($el) {
            return $el === 'lorem';
        });

        $this->assertEquals(['lorem'], $collection->all());
    }

    public function testRemoveItemsOnCollection()
    {
        $items = ['lorem', 'ipsum', 'dolor'];
        $original = new Collection(...$items);

        $collection = $original->slice(0, 2);

        $this->assertEquals(['lorem', 'ipsum'], $collection->all());

        $collection = $original->splice(1, 2);

        $this->assertEquals(['ipsum', 'dolor'], $collection->all());
    }

    public function testSerializeObject()
    {
        $serializable = new Collection(new Serializable);
        $jsonable = new Collection(new Jsonable);
        $arrayable = new Collection(new Arrayable);

        $this->assertEquals([[]], $serializable->jsonSerialize());
        $this->assertEquals(['[]'], $jsonable->jsonSerialize());
        $this->assertEquals([[]], $arrayable->jsonSerialize());
    }

    public function testManipulateAsArray()
    {
        $collection = new Collection('foo', 'bar');

        $this->assertTrue(isset($collection[0]));
        $this->assertEquals('foo', $collection[0]);

        unset($collection[1]);

        $this->assertEquals(1, $collection->count());

        $collection[0] = 'bar';
        $collection[] = 'foo';

        $this->assertEquals('bar foo', implode(' ', $collection->all()));
    }
}
