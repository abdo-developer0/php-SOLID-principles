<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\LSP;

interface Printable
{
    /**
     * Support the print functinaltes.
     * 
     * @return void
     */
    public function print(): void;
}