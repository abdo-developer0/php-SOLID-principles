<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\ISP;

abstract class AbstractCar implements CarInterface
{
    /**
     * The modle of car.
     * 
     * @var string $modle
     */
    protected string $modle;

    /**
     * Initialize the Car.
     * 
     * @param string $modle
     * @return void
     */
    public function __construct(string $modle)
    {
        $this->modle = $modle;
    }
}