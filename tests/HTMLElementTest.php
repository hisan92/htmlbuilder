<?php

namespace HTMLBuilder\Tests;

use HTMLBuilder\HTML\HTML;
use HTMLBuilder\HTML\Node\Text;
use PHPUnit\Framework\TestCase;

class HTMLElementTest extends TestCase
{
    public function testCreateDivElement()
    {
        $el = HTML::createElement('div');

        $this->assertEquals('div', $el->getTagName());
    }

    public function testCreateBreakLine()
    {
        $el = HTML::createElement('br');

        $this->assertEquals('<br>', $el->output());
    }

    public function testCreateTextElement()
    {
        $el = Text::create();

        $el->textContent('Lorem ipsum');

        $this->assertNotNull($el);
        $this->assertEquals('Lorem ipsum', $el->output());
    }

    public function testCanOutputElementAsString()
    {
        $el = HTML::createElement('div');

        $this->assertEquals('<div></div>', $el->output());
    }

    public function testCanPrettyOutputElementAsString()
    {
        $el = HTML::createElement('div');

        $this->assertNotFalse($el->prettyOutput());
    }

    public function testCreateDivElementWithOptionsArray()
    {
        $el = HTML::createElement('div', [
            'attributes' => [
                'id' => 'foo'
            ],
            'classes' => 'foo bar'
        ]);

        $this->assertEquals('div', $el->getTagName());
        $this->assertEquals('<div class="foo bar" id="foo"></div>', $el->output());
    }

    public function testCreateElementWithTextContent()
    {
        $el = HTML::createElement('div');

        $el->append('Lorem ipsum');

        $this->assertEquals('<div>Lorem ipsum</div>', $el->output());
    }

    public function testCloneDivElement()
    {
        $el = HTML::createElement('div', ['classes' => 'foo']);
        $elClone = $el->clone();

        $this->assertEquals('<div class="foo"></div>', $elClone->output());
    }

    public function testCheckIfCloneIsNotSameDivElement()
    {
        $el = HTML::createElement('div', ['classes' => 'foo']);
        $elClone = $el->clone();

        $this->assertNotEquals($el->id(), $elClone->id());
    }

    public function testDivElementHasId()
    {
        $el = HTML::createElement('div');

        $this->assertNotNull($el->id());
    }

    public function testAddClassElement()
    {
        $el = HTML::createElement('div');

        $el->addClass('foo');

        $this->assertEquals('foo', $el->classes());
        $this->assertEquals('<div class="foo"></div>', $el->output());

        $el->addClass('bar');

        $this->assertEquals('foo bar', $el->classes());
        $this->assertEquals('<div class="foo bar"></div>', $el->output());

        $el->addClass('form-control bg-blue');

        $this->assertEquals('foo bar form-control bg-blue', $el->classes());
        $this->assertEquals('<div class="foo bar form-control bg-blue"></div>', $el->output());
    }

    public function testRemoveClassElement()
    {
        $el = HTML::createElement('div');

        $el->addClass('foo bar');

        $this->assertEquals('foo bar', $el->classes());
        $this->assertEquals('<div class="foo bar"></div>', $el->output());

        $el->removeClass('foo');

        $this->assertEquals('bar', $el->classes());
        $this->assertEquals('<div class="bar"></div>', $el->output());
    }

    public function testToggleClassElement()
    {
        $el = HTML::createElement('div');

        $el->addClass('foo');
        $el->toggleClass('foo');
        $el->toggleClass('bar');

        $this->assertEquals('bar', $el->classes());
        $this->assertEquals('<div class="bar"></div>', $el->output());
    }

    public function testCanDuplicateClassElement()
    {
        $el = HTML::createElement('div');

        $el->addClass('foo')->addClass('foo');

        $this->assertEquals('foo', $el->classes());
        $this->assertEquals('<div class="foo"></div>', $el->output());

        $this->assertNotEquals('foo foo', $el->classes());
        $this->assertNotEquals('<div class="foo foo"></div>', $el->output());

        $el->addClass('bar bar');

        $this->assertEquals('foo bar', $el->classes());
        $this->assertEquals('<div class="foo bar"></div>', $el->output());
    }

    public function testSetAttributeClassFailElement()
    {
        $el = HTML::createElement('div');

        $el->setAttribute('class', 'foo');

        $this->assertEquals('<div></div>', $el->output());
        $this->assertNotEquals('<div class="foo"></div>', $el->output());
    }

    public function testSetAttributeOnInputElement()
    {
        $el = HTML::createElement('input');

        $el->setAttribute('name', 'foo');

        $this->assertEquals('foo', $el->getAttribute('name'));
        $this->assertEquals('<input name="foo">', $el->output());

        $el->attr('name', 'bar');

        $this->assertEquals('bar', $el->getAttribute('name'));
        $this->assertEquals('<input name="bar">', $el->output());
    }

    public function testRemoveAttributeFromElement()
    {
        $el = HTML::createElement('input');

        $el->attr('value', 'foo');

        $el->removeAttribute('value');

        $this->assertNull($el->attr('value'));
        $this->assertEquals('<input>', $el->output());
    }

    public function testAddDataAttributeToElement()
    {
        $el = HTML::createElement('div');

        $el->data('foo', 'bar');

        $this->assertEquals('bar', $el->data('foo'));
        $this->assertEquals('<div data-foo="bar"></div>', $el->output());
    }

    public function testAppendChildElement()
    {
        $el = HTML::createElement('div');

        $el->append(
            HTML::createElement('span')
        );

        $this->assertEquals('<div><span></span></div>', $el->output());
    }

    public function testPrependChildElement()
    {
        $el = HTML::createElement('div');

        $el->append(
            HTML::createElement('span', [
                'attributes' => [
                    'id' => 'bar'
                ]
            ])
        );

        $el->prepend(
            HTML::createElement('span', [
                'attributes' => [
                    'id' => 'foo'
                ]
            ])
                );

        $this->assertEquals('<div><span id="foo"></span><span id="bar"></span></div>', $el->output());
    }

    public function testHasParent()
    {
        $span = HTML::createElement('span', [], 'Lorem ipsum');
        $el   = HTML::createElement('div', [], $span);

        $this->assertNotNull($span->parent());
    }

    public function testSwitchParentElements()
    {
        $foo = HTML::createElement('div', ['classes' => 'foo']);
        $bar = HTML::createElement('div', ['classes' => 'bar']);
        $el  = HTML::createElement('span');

        $foo->append($el);

        $this->assertEquals('<div class="foo"><span></span></div>', $foo->output());
        $this->assertEquals('<div class="bar"></div>', $bar->output());

        $el->appendTo($bar);

        $this->assertEquals('<div class="foo"></div>', $foo->output());
        $this->assertEquals('<div class="bar"><span></span></div>', $bar->output());

        $el->prependTo($foo);

        $this->assertEquals('<div class="foo"><span></span></div>', $foo->output());
        $this->assertEquals('<div class="bar"></div>', $bar->output());
    }
}
