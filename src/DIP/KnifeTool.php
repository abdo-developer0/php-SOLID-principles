<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\DIP;

class KnifeTool extends AbstractTool
{
    /**
     * Cut the bidza using the knife.
     * 
     * @return void
     */
    public function cut(): void
    {
        echo 'cuting by knife';
    }
}