<?php

namespace HTMLBuilder\HTML\Property;

use HTMLBuilder\HTML\Exceptions\InvalidStylePropertyException;

class Style
{
    /**
     * Sets or returns the alignment between the lines inside a flexible container when the items do not use all available space.
     * @var string
     */
    public $alignContent;

    /**
     * Sets or returns the alignment for items inside a flexible container.
     * @var string
     */
    public $alignItems;

    /**
     * Sets or returns the alignment for selected items inside a flexible container.
     * @var string
     */
    public $alignSelf;

    /**
     * A shorthand property for all the animation properties below, except the animationPlayState property.
     * @var string
     */
    public $animation;

    /**
     * Sets or returns when the animation will start.
     * @var string
     */
    public $animationDelay;

    /**
     * Sets or returns whether or not the animation should play in reverse on alternate cycles.
     * @var string
     */
    public $animationDirection;

    /**
     * Sets or returns how many seconds or milliseconds an animation takes to complete one cycle.
     * @var string
     */
    public $animationDuration;

    /**
     * Sets or returns what values are applied by the animation outside the time it is executing.
     * @var string
     */
    public $animationFillMode;

    /**
     * Sets or returns the number of times an animation should be played.
     * @var string
     */
    public $animationIterationCount;

    /**
     * Sets or returns a name for the @keyframes animation.
     * @var string
     */
    public $animationName;

    /**
     * Sets or returns the speed curve of the animation.
     * @var string
     */
    public $animationTimingFunction;

    /**
     * Sets or returns whether the animation is running or paused.
     * @var string
     */
    public $animationPlayState;

    /**
     * Sets or returns all the background properties in one declaration.
     * @var string
     */
    public $background;

    /**
     * Sets or returns whether a background-image is fixed or scrolls with the page.
     * @var string
     */
    public $backgroundAttachment;

    /**
     * Sets or returns the background-color of an element.
     * @var string
     */
    public $backgroundColor;

    /**
     * Sets or returns the background-image for an element.
     * @var string
     */
    public $backgroundImage;

    /**
     * Sets or returns the starting position of a background-image.
     * @var string
     */
    public $backgroundPosition;

    /**
     * Sets or returns how to repeat (tile) a background-image.
     * @var string
     */
    public $backgroundRepeat;

    /**
     * Sets or returns the painting area of the background.
     * @var string
     */
    public $backgroundClip;

    /**
     * Sets or returns the positioning area of the background images.
     * @var string
     */
    public $backgroundOrigin;

    /**
     * Sets or returns the size of the background image.
     * @var string
     */
    public $backgroundSize;

    /**
     * Sets or returns whether or not an element should be visible when not facing the screen.
     * @var string
     */
    public $backfaceVisibility;

    /**
     * Sets or returns borderWidth, borderStyle, and borderColor in one declaration.
     * @var string
     */
    public $border;

    /**
     * Sets or returns all the borderBottom properties in one declaration.
     * @var string
     */
    public $borderBottom;

    /**
     * Sets or returns the color of the bottom border.
     * @var string
     */
    public $borderBottomColor;

    /**
     * Sets or returns the shape of the border of the bottom-left corner.
     * @var string
     */
    public $borderBottomLeftRadius;

    /**
     * Sets or returns the shape of the border of the bottom-right corner.
     * @var string
     */
    public $borderBottomRightRadius;

    /**
     * Sets or returns the style of the bottom border.
     * @var string
     */
    public $borderBottomStyle;

    /**
     * Sets or returns the width of the bottom border.
     * @var string
     */
    public $borderBottomWidth;

    /**
     * Sets or returns whether the table border should be collapsed into a single border, or not.
     * @var string
     */
    public $borderCollapse;

    /**
     * Sets or returns the color of an element's border (can have up to four values).
     * @var string
     */
    public $borderColor;

    /**
     * A shorthand property for setting or returning all the borderImage properties.
     * @var string
     */
    public $borderImage;

    /**
     * Sets or returns the amount by which the border image area extends beyond the border box.
     * @var string
     */
    public $borderImageOutset;

    /**
     * Sets or returns whether the image-border should be repeated, rounded or stretched.
     * @var string
     */
    public $borderImageRepeat;

    /**
     * Sets or returns the inward offsets of the image-border.
     * @var string
     */
    public $borderImageSlice;

    /**
     * Sets or returns the image to be used as a border.
     * @var string
     */
    public $borderImageSource;

    /**
     * Sets or returns the widths of the image-border.
     * @var string
     */
    public $borderImageWidth;

    /**
     * Sets or returns all the borderLeft properties in one declaration.
     * @var string
     */
    public $borderLeft;

    /**
     * Sets or returns the color of the left border.
     * @var string
     */
    public $borderLeftColor;

    /**
     * Sets or returns the style of the left border.
     * @var string
     */
    public $borderLeftStyle;

    /**
     * Sets or returns the width of the left border.
     * @var string
     */
    public $borderLeftWidth;

    /**
     * A shorthand property for setting or returning all the four borderRadius properties.
     * @var string
     */
    public $borderRadius;

    /**
     * Sets or returns all the borderRight properties in one declaration.
     * @var string
     */
    public $borderRight;

    /**
     * Sets or returns the color of the right border.
     * @var string
     */
    public $borderRightColor;

    /**
     * Sets or returns the style of the right border.
     * @var string
     */
    public $borderRightStyle;

    /**
     * Sets or returns the width of the right border.
     * @var string
     */
    public $borderRightWidth;

    /**
     * Sets or returns the space between cells in a table.
     * @var string
     */
    public $borderSpacing;

    /**
     * Sets or returns the style of an element's border (can have up to four values).
     * @var string
     */
    public $borderStyle;

    /**
     * Sets or returns all the borderTop properties in one declaration.
     * @var string
     */
    public $borderTop;

    /**
     * Sets or returns the color of the top border.
     * @var string
     */
    public $borderTopColor;

    /**
     * Sets or returns the shape of the border of the top-left corner.
     * @var string
     */
    public $borderTopLeftRadius;

    /**
     * Sets or returns the shape of the border of the top-right corner.
     * @var string
     */
    public $borderTopRightRadius;

    /**
     * Sets or returns the style of the top border.
     * @var string
     */
    public $borderTopStyle;

    /**
     * Sets or returns the width of the top border.
     * @var string
     */
    public $borderTopWidth;

    /**
     * Sets or returns the width of an element's border (can have up to four values).
     * @var string
     */
    public $borderWidth;

    /**
     * Sets or returns the bottom position of a positioned element.
     * @var string
     */
    public $bottom;

    /**
     * Sets or returns the behaviour of the background and border of an element at page-break, or, for in-line elements, at line-break.
     * @var string
     */
    public $boxDecorationBreak;

    /**
     * Attaches one or more drop-shadows to the box.
     * @var string
     */
    public $boxShadow;

    /**
     * Allows you to define certain elements to fit an area in a certain way.
     * @var string
     */
    public $boxSizing;

    /**
     * Sets or returns the position of the table caption.
     * @var string
     */
    public $captionSide;

    /**
     * Sets or returns the caret/cursor color of an element.
     * @var string
     */
    public $caretColor;

    /**
     * Sets or returns the position of the element relative to floating objects.
     * @var string
     */
    public $clear;

    /**
     * Sets or returns which part of a positioned element is visible.
     * @var string
     */
    public $clip;

    /**
     * Sets or returns the color of the text.
     * @var string
     */
    public $color;

    /**
     * Sets or returns the number of columns an element should be divided into.
     * @var string
     */
    public $columnCount;

    /**
     * Sets or returns how to fill columns.
     * @var string
     */
    public $columnFill;

    /**
     * Sets or returns the gap between the columns.
     * @var string
     */
    public $columnGap;

    /**
     * A shorthand property for setting or returning all the columnRule properties.
     * @var string
     */
    public $columnRule;

    /**
     * Sets or returns the color of the rule between columns.
     * @var string
     */
    public $columnRuleColor;

    /**
     * Sets or returns the style of the rule between columns.
     * @var string
     */
    public $columnRuleStyle;

    /**
     * Sets or returns the width of the rule between columns.
     * @var string
     */
    public $columnRuleWidth;

    /**
     * A shorthand property for setting or returning columnWidth and columnCount.
     * @var string
     */
    public $columns;

    /**
     * Sets or returns how many columns an element should span across.
     * @var string
     */
    public $columnSpan;

    /**
     * Sets or returns the width of the columns.
     * @var string
     */
    public $columnWidth;

    /**
     * Used with the :before and :after pseudo-elements, to insert generated content.
     * @var string
     */
    public $content;

    /**
     * Increments one or more counters.
     * @var string
     */
    public $counterIncrement;

    /**
     * Creates or resets one or more counters.
     * @var string
     */
    public $counterReset;

    /**
     * Sets or returns the type of cursor to display for the mouse pointer.
     * @var string
     */
    public $cursor;

    /**
     * Sets or returns the text direction.
     * @var string
     */
    public $direction;

    /**
     * Sets or returns an element's display type.
     * @var string
     */
    public $display;

    /**
     * Sets or returns whether to show the border and background of empty cells, or not.
     * @var string
     */
    public $emptyCells;

    /**
     * Sets or returns image filters (visual effects, like blur and saturation).
     * @var string
     */
    public $filter;

    /**
     * Sets or returns the length of the item, relative to the rest.
     * @var string
     */
    public $flex;

    /**
     * Sets or returns the initial length of a flexible item.
     * @var string
     */
    public $flexBasis;

    /**
     * Sets or returns the direction of the flexible items.
     * @var string
     */
    public $flexDirection;

    /**
     * A shorthand property for the flexDirection and the flexWrap properties.
     * @var string
     */
    public $flexFlow;

    /**
     * Sets or returns how much the item will grow relative to the rest.
     * @var string
     */
    public $flexGrow;

    /**
     * Sets or returns how the item will shrink relative to the rest.
     * @var string
     */
    public $flexShrink;

    /**
     * Sets or returns whether the flexible items should wrap or not.
     * @var string
     */
    public $flexWrap;

    /**
     * Sets or returns the horizontal alignment of an element.
     * @var string
     */
    public $cssFloat;

    /**
     * Sets or returns fontStyle, fontVariant, fontWeight, fontSize, lineHeight, and fontFamily in one declaration.
     * @var string
     */
    public $font;

    /**
     * Sets or returns the font family for text.
     * @var string
     */
    public $fontFamily;

    /**
     * Sets or returns the font size of the text.
     * @var string
     */
    public $fontSize;

    /**
     * Sets or returns whether the style of the font is normal, italic or oblique.
     * @var string
     */
    public $fontStyle;

    /**
     * Sets or returns whether the font should be displayed in small capital letters.
     * @var string
     */
    public $fontVariant;

    /**
     * Sets or returns the boldness of the font.
     * @var string
     */
    public $fontWeight;

    /**
     * Preserves the readability of text when font fallback occurs.
     * @var string
     */
    public $fontSizeAdjust;

    /**
     * Selects a normal, condensed, or expanded face from a font family.
     * @var string
     */
    public $fontStretch;

    /**
     * Specifies whether a punctuation character may be placed outside the line box.
     * @var string
     */
    public $hangingPunctuation;

    /**
     * Sets or returns the height of an element.
     * @var string
     */
    public $height;

    /**
     * Sets how to split words to improve the layout of paragraphs.
     * @var string
     */
    public $hyphens;

    /**
     * Provides the author the ability to style an element with an iconic equivalent.
     * @var string
     */
    public $icon;

    /**
     * Specifies a rotation in the right or clockwise direction that a user agent applies to an image.
     * @var string
     */
    public $imageOrientation;

    /**
     * Defines whether an element must create a new stacking content.
     * @var string
     */
    public $isolation;

    /**
     * Sets or returns the alignment between the items inside a flexible container when the items do not use all available space.
     * @var string
     */
    public $justifyContent;

    /**
     * Sets or returns the left position of a positioned element.
     * @var string
     */
    public $left;

    /**
     * Sets or returns the space between characters in a text.
     * @var string
     */
    public $letterSpacing;

    /**
     * Sets or returns the distance between lines in a text.
     * @var string
     */
    public $lineHeight;

    /**
     * Sets or returns listStyleImage, listStylePosition, and listStyleType in one declaration.
     * @var string
     */
    public $listStyle;

    /**
     * Sets or returns an image as the list-item marker.
     * @var string
     */
    public $listStyleImage;

    /**
     * Sets or returns the position of the list-item marker.
     * @var string
     */
    public $listStylePosition;

    /**
     * Sets or returns the list-item marker type.
     * @var string
     */
    public $listStyleType;

    /**
     * Sets or returns the margins of an element (can have up to four values).
     * @var string
     */
    public $margin;

    /**
     * Sets or returns the bottom margin of an element.
     * @var string
     */
    public $marginBottom;

    /**
     * Sets or returns the left margin of an element.
     * @var string
     */
    public $marginLeft;

    /**
     * Sets or returns the right margin of an element.
     * @var string
     */
    public $marginRight;

    /**
     * Sets or returns the top margin of an element.
     * @var string
     */
    public $marginTop;

    /**
     * Sets or returns the maximum height of an element.
     * @var string
     */
    public $maxHeight;

    /**
     * Sets or returns the maximum width of an element.
     * @var string
     */
    public $maxWidth;

    /**
     * Sets or returns the minimum height of an element.
     * @var string
     */
    public $minHeight;

    /**
     * Sets or returns where to navigate when using the arrow-up navigation key.
     * @var string
     */
    public $minWidth;

    /**
     * Specifies how the contents of a replaced element should be fitted to the box established by its used height and width.
     * @var string
     */
    public $objectFit;

    /**
     * Specifies the alignment of the replaced element inside its box.
     * @var string
     */
    public $objectPosition;

    /**
     * Sets or returns the opacity level for an element.
     * @var string
     */
    public $opacity;

    /**
     * Sets or returns the order of the flexible item, relative to the rest.
     * @var string
     */
    public $order;

    /**
     * Sets or returns the minimum number of lines for an element that must be left at the bottom of a page when a page break occurs inside an element.
     * @var string
     */
    public $orphans;

    /**
     * Sets or returns all the outline properties in one declaration.
     * @var string
     */
    public $outline;

    /**
     * Sets or returns the color of the outline around a element.
     * @var string
     */
    public $outlineColor;

    /**
     * Offsets an outline, and draws it beyond the border edge.
     * @var string
     */
    public $outlineOffset;

    /**
     * Sets or returns the style of the outline around an element.
     * @var string
     */
    public $outlineStyle;

    /**
     * Sets or returns the width of the outline around an element.
     * @var string
     */
    public $outlineWidth;

    /**
     * Sets or returns what to do with content that renders outside the element box.
     * @var string
     */
    public $overflow;

    /**
     * Specifies what to do with the left/right edges of the content, if it overflows the element's content area.
     * @var string
     */
    public $overflowX;

    /**
     * Specifies what to do with the top/bottom edges of the content, if it overflows the element's content area.
     * @var string
     */
    public $overflowY;

    /**
     * Sets or returns the padding of an element (can have up to four values).
     * @var string
     */
    public $padding;

    /**
     * Sets or returns the bottom padding of an element.
     * @var string
     */
    public $paddingBottom;

    /**
     * Sets or returns the left padding of an element.
     * @var string
     */
    public $paddingLeft;

    /**
     * Sets or returns the right padding of an element.
     * @var string
     */
    public $paddingRight;

    /**
     * Sets or returns the top padding of an element.
     * @var string
     */
    public $paddingTop;

    /**
     * Sets or returns the page-break behavior after an element.
     * @var string
     */
    public $pageBreakAfter;

    /**
     * Sets or returns the page-break behavior before an element.
     * @var string
     */
    public $pageBreakBefore;

    /**
     * Sets or returns the page-break behavior inside an element.
     * @var string
     */
    public $pageBreakInside;

    /**
     * Sets or returns the perspective on how 3D elements are viewed.
     * @var string
     */
    public $perspective;

    /**
     * Sets or returns the bottom position of 3D elements.
     * @var string
     */
    public $perspectiveOrigin;

    /**
     * Sets or returns the type of positioning method used for an element (static, relative, absolute or fixed).
     * @var string
     */
    public $position;

    /**
     * Sets or returns the type of quotation marks for embedded quotations.
     * @var string
     */
    public $quotes;

    /**
     * Sets or returns whether or not an element is resizable by the user.
     * @var string
     */
    public $resize;

    /**
     * Sets or returns the right position of a positioned element.
     * @var string
     */
    public $right;

    /**
     * Specifies whether to smoothly animate the scroll position, instead of a straight jump, when the user clicks on a link within a scrollable boxt.
     * @var string
     */
    public $scrollBehavior;


    /**
     * Sets or returns the way to lay out table cells, rows, and columns.
     * @var string
     */
    public $tableLayout;

    /**
     * Sets or returns the length of the tab-character.
     * @var string
     */
    public $tabSize;

    /**
     * Sets or returns the horizontal alignment of text.
     * @var string
     */
    public $textAlign;

    /**
     * Sets or returns how the last line of a block or a line right before a forced line break is aligned when text-align is "justify".
     * @var string
     */
    public $textAlignLast;

    /**
     * Sets or returns the decoration of a text.
     * @var string
     */
    public $textDecoration;

    /**
     * Sets or returns the color of the text-decoration.
     * @var string
     */
    public $textDecorationColor;

    /**
     * Sets or returns the type of line in a text-decoration.
     * @var string
     */
    public $textDecorationLine;

    /**
     * Sets or returns the style of the line in a text decoration.
     * @var string
     */
    public $textDecorationStyle;

    /**
     * Sets or returns the indentation of the first line of text.
     * @var string
     */
    public $textIndent;

    /**
     * Sets or returns the justification method used when text-align is "justify".
     * @var string
     */
    public $textJustify;

    /**
     * Sets or returns what should happen when text overflows the containing element.
     * @var string
     */
    public $textOverflow;

    /**
     * Sets or returns the shadow effect of a text.
     * @var string
     */
    public $textShadow;

    /**
     * Sets or returns the capitalization of a text.
     * @var string
     */
    public $textTransform;

    /**
     * Sets or returns the top position of a positioned element.
     * @var string
     */
    public $top;

    /**
     * Applies a 2D or 3D transformation to an element.
     * @var string
     */
    public $transform;

    /**
     * Sets or returns the position of transformed elements.
     * @var string
     */
    public $transformOrigin;

    /**
     * Sets or returns how nested elements are rendered in 3D space.
     * @var string
     */
    public $transformStyle;

    /**
     * A shorthand property for setting or returning the four transition properties.
     * @var string
     */
    public $transition;

    /**
     * Sets or returns the CSS property that the transition effect is for.
     * @var string
     */
    public $transitionProperty;

    /**
     * Sets or returns how many seconds or milliseconds a transition effect takes to complete.
     * @var string
     */
    public $transitionDuration;

    /**
     * Sets or returns the speed curve of the transition effect.
     * @var string
     */
    public $transitionTimingFunction;

    /**
     * Sets or returns when the transition effect will start.
     * @var string
     */
    public $transitionDelay;

    /**
     * Sets or returns whether the text should be overridden to support multiple languages in the same document.
     * @var string
     */
    public $unicodeBidi;

    /**
     * Sets or returns whether the text of an element can be selected or not.
     * @var string
     */
    public $userSelect;

    /**
     * Sets or returns the vertical alignment of the content in an element.
     * @var string
     */
    public $verticalAlign;

    /**
     * Sets or returns whether an element should be visible.
     * @var string
     */
    public $visibility;

    /**
     * Sets or returns how to handle tabs, line breaks and whitespace in a text.
     * @var string
     */
    public $whiteSpace;

    /**
     * Sets or returns the width of an element.
     * @var string
     */
    public $width;

    /**
     * Sets or returns line breaking rules for non-CJK scripts.
     * @var string
     */
    public $wordBreak;

    /**
     * Sets or returns the spacing between words in a text.
     * @var string
     */
    public $wordSpacing;

    /**
     * Allows long, unbreakable words to be broken and wrap to the next line.
     * @var string
     */
    public $wordWrap;

    /**
     * Sets or returns the minimum number of lines for an element that must be visible at the top of a page.
     * @var string
     */
    public $widows;

    /**
     * Sets or returns the stack order of a positioned element.
     * @var string
     */
    public $zIndex;

    /**
     * @param array $properties Must match a valid camel or kebab case. Eg.: array('fontSize' => '1rem')
     */
    public function __construct($properties = [])
    {
        $validProperties = $this->properties();

        foreach ($properties as $prop => $value) {
            $converted = str_kebab_to_camel($prop);

            if (in_array($converted, $validProperties)) {
                $this->{$converted} = $value;
            }
        }
    }

    public function __set($name, $value)
    {
        // This is not allowed.
        throw new InvalidStylePropertyException;
    }

    public function __toString()
    {
        $properties = [];

        foreach ($this->properties() as $prop) {
            $properties[str_camel_to_kebab($prop)] = $this->{$prop};
        }

        $filtered = array_filter($properties, fn ($value) => $value);
        $result = [];

        foreach ($filtered as $prop => $value) {
            array_push($result, "$prop:$value");
        }

        return implode(';', $result);
    }

    /**
     * Verify if has one or more property defined.
     *
     * @return bool
     */
    public function isDefined()
    {
        return array_some(fn ($prop) => $this->{$prop}, $this->properties());
    }

    private function properties($except = [], $kebab = false)
    {
        $reflector = new \ReflectionClass($this);

        return array_map(
            fn ($prop) => $prop->getName(),
            array_filter(
                $reflector->getProperties(),
                fn ($prop) =>! in_array(
                    $kebab ? str_camel_to_kebab($prop->getName()) : $prop->getName(),
                    $except
                )
            )
        );
    }
}
