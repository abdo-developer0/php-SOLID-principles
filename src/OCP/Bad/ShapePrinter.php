<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\OCP\Bad;

class ShapePrinter
{
    /**
     * Print andy  shape.
     * 
     * @param mixed $shape
     * @return void
     */
    public function printShape(mixed $shape): void
    {
        if (is_a($shape, 'Rectangle')) {
            echo 'print rectangle';
        }
        else if (is_a($shape, 'Square')) {
            echo 'print square';
        }
        else {
            echo 'bad shape';
        }
    }
}