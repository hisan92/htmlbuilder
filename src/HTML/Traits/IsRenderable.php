<?php

namespace HTMLBuilder\HTML\Traits;

trait IsRenderable
{
    /**
     * Obtain the Element as string
     *
     * @return string
     */
    public function output()
    {
        return (string) $this;
    }

    /**
     * Obtain the Element as string
     *
     * @return string|false
     */
    public function prettyOutput()
    {
        $dom = new \DOMDocument;
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadHTML($this->output(), LIBXML_HTML_NOIMPLIED);

        return $dom->saveXML($dom->documentElement);
    }
}
