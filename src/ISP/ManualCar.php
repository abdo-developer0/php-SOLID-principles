<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\ISP;

class ManualCar extends AbstractCar implements ManualInterface
{
    public function start(): void
    {
        echo 'start as manual';
    }

    public function moveAhead(): void
    {
        echo 'go ahead';
    }
}