<?php

namespace HTMLBuilder\HTML;

use HTMLBuilder\HTML\Node\Element;

final class HTML
{
    public const BLOCK_ELEMENTS = [
        'address' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'article' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'aside' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'blockquote' => [
            'selfClosed'      => false,
            'validAttrs'      => ['cite'],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'details' => [
            'selfClosed'      => false,
            'validAttrs'      => ['open'],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'dialog' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'dd' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'div' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'dl' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'dt' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'fieldset' => [
            'selfClosed'      => false,
            'validAttrs'      => ['disabled', 'form', 'name'],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'figcaption' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'figure' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'footer' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'form' => [
            'selfClosed'      => false,
            'validAttrs'      => [
                'accept',
                'accept-charset',
                'action',
                'autocomplete',
                'enctype',
                'method',
                'name',
                'novalidate',
                'target'
            ],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'h1' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'h2' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'h3' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'h4' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'h5' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'h6' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'header' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'hgroup' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'hr' => [
            'selfClosed'      => false,
            'validAttrs'      => ['align'],
            'obsoleteAttrs'   => ['color'],
            'deprecatedAttrs' => []
        ],
        'li' => [
            'selfClosed'      => false,
            'validAttrs'      => ['value'],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'main' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'nav' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'ol' => [
            'selfClosed'      => false,
            'validAttrs'      => ['reversed', 'start'],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'p' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'pre' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'section' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'table' => [
            'selfClosed'      => false,
            'validAttrs'      => ['align'],
            'obsoleteAttrs'   => ['background', 'bgcolor', 'border'],
            'deprecatedAttrs' => ['summary']
        ],
        'ul' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ]
    ];

    public const INLINE_ELEMENTS = [
        'a' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'abbr' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'acronym' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'audio' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'b' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'bdi' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'bdo' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'big' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'br' => \HTMLBuilder\HTML\Node\BreakLine::class,
        'button' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'canvas' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'cite' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'code' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'data' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'datalist' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'del' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'dfn' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'em' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'embed' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'i' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'iframe' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'img' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'input' => [
            'selfClosed'      => true,
            'validAttrs'      => ['name', 'value'],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'ins' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'kbd' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'label' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'map' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'mark' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'meter' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'noscript' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'object' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'output' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'picture' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'progress' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'q' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'ruby' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        's' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'samp' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'script' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'select' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'slot' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'small' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'span' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'strong' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'sub' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'sup' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'svg' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'template' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'textarea' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'time' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'u' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'tt' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'var' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'video' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ],
        'wbr' => [
            'selfClosed'      => false,
            'validAttrs'      => [],
            'obsoleteAttrs'   => [],
            'deprecatedAttrs' => []
        ]
    ];

    private function __construct()
    {
        # Make it private
    }

    /**
     * Create a new HTML Element instance.
     *
     * @param  string $tag
     * @param  array $options
     * @param  \HTMLBuilder\HTML\Contracts\IHTMLElement ...$children
     *
     * @return \HTMLBuilder\HTML\Node\AbstractElement
     */
    public static function createElement($tag, $options = [], ...$children)
    {
        return Element::create($tag, $options, ...$children);
    }
}
