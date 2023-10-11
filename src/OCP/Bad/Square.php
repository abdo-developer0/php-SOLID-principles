<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\OCP\Bad;

class Rectangle
{
    /**
     * The size.
     * 
     * @var int $size
     */
    private int $size;

    /**
     * Initialize Rectangle
     * 
     * @param int $size
     * @return void
     * @example $square = new Square(10); // area equals 100
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * get area of rectangle.
     * 
     * @return int
     */
    public function getArea(): int
    {
        return $this->size * $this->size;
    }
}