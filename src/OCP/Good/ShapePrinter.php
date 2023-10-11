<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\OCP\Good;

use AbdoDeveloper0\PhpSolidPrinciples\OCP\Good\ShapeInterface;

class ShapePrinter
{
    /**
     * Print andy  shape.
     * 
     * @param ShapeInterface $shape
     * @return void
     */
    public function printShape(ShapeInterface $shape): void
    {
        $shape->print();
    }
}