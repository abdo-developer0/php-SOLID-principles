<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\DIP;

abstract class AbstractTool
{
    /**
     * Bidza for cuting.
     * 
     * @var Bidza $bidza
     */
    protected Bidza $bidza;

    /**
     * Initialize the tool.
     * 
     * @param Bidza $bidza
     * @return void
     */
    public function __construct(Bidza $bidza)
    {
        $this->bidza = $bidza;
    }

    /**
     * Abstract method for support the cut funtionalites.
     * 
     * @return void
     */
    abstract public function cut(): void;
}