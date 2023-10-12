<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\LSP;

class ImageDocument extends Document
{
    public function print(): void
    {
        echo 'image document.';
    }
}