<?php

namespace HTMLBuilder\Tests;

use HTMLBuilder\HTML\Exceptions\InvalidStylePropertyException;
use HTMLBuilder\HTML\Property\Style;
use PHPUnit\Framework\TestCase;

class StyleTest extends TestCase
{
    public function testCreateAnNewStyleInstance()
    {
        $style = new Style;

        $this->assertTrue($style instanceof Style);
    }

    public function testCheckIfHasNoPropertyDefined()
    {
        $style = new Style;

        $this->assertFalse($style->isDefined());
    }

    public function testCheckIfHasOneOrMorePropertyDefined()
    {
        $style = new Style;

        $style->fontSize = '2rem';

        $this->assertTrue($style->isDefined());
    }

    public function testSetAndCheckAnPropertyInStyleInstance()
    {
        $style = new Style;

        $this->assertEmpty($style->zIndex);

        $style->zIndex = '999';

        $this->assertEquals('999', $style->zIndex);
    }

    public function testTryToSetAnInvalidPropertyToStyle()
    {
        $style = new Style;

        $this->expectException(InvalidStylePropertyException::class);

        $style->invalid = 'foobar';
    }

    public function testCheckIfStyleOutputIsValid()
    {
        $style = new Style;

        $style->fontSize = '.5rem';
        $style->textAlign = 'center';

        $expected = 'font-size:.5rem;text-align:center';

        $this->assertEquals($expected, (string) $style);
    }

    public function testUnsetSomeStyleProperty()
    {
        $style = new Style;

        $style->fontSize = '.5rem';
        $style->textAlign = 'center';

        $expected = 'font-size:.5rem;text-align:center';

        $this->assertEquals($expected, (string) $style);

        $style->textAlign = null;

        $expected = 'font-size:.5rem';

        $this->assertEquals($expected, (string) $style);
    }

    public function testTryParsePropertiesFromArray()
    {
        $properties = ['font-size' => '.5rem', 'textAlign' => 'center'];

        $style = new Style($properties);

        $expected = 'font-size:.5rem;text-align:center';

        $this->assertEquals($expected, (string) $style);
    }
}
