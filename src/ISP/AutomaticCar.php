<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\ISP;

class AutomaticCar extends AbstractCar implements AutomaticInterface
{
    public function startAutomatic(): void
    {
        echo 'start as automatic';
    }

    public function moveAhead(): void
    {
        echo 'go ahead';
    }
}