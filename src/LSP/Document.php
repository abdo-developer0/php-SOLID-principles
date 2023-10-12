<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\LSP;

abstract class Document implements Printable
{
    /**
     * The document path.
     * 
     * @var string $path
     */
    protected string $path;

    /**
     * Initialize the document.
     * 
     * @param string $path
     * @return void
     * @example $document = new ConcreatDocument('path/to/document.extensison');
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }
}