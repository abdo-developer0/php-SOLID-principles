<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\LSP;

class DocumentPrinter
{
    /**
     * Print any document passed.
     * 
     * @param Document $document
     * @return void
     */
    public function printDocument(Document $document): void
    {
        $document->print();
    }
}