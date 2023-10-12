<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\LSP;

class TextDocument extends Document
{
    public function print(): void
    {
        echo 'text document.';
    }
}