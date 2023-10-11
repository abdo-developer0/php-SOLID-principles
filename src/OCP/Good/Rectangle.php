<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\OCP\Good;

class Rectangle implements ShapeInterface
{
    /**
     * The width.
     * 
     * @var int $idth
     */
    private int $width;

    /**
     * The height.
     * 
     * @var int $height
     */
    private int $height;

    /**
     * Initialize Rectangle
     * 
     * @param int $width
     * @param int $height
     * @return void
    * @example $rectangle = new Rectangle(5, 10); // area equals 50
    */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height =$height;
    }

    /**
     * get area of rectangle.
     * 
     * @return int
     */
    public function getArea(): int
    {
        return $this->width * $this->height;
    }

    /**
     * Print the rectangle
     * 
     * @return void
     */
    public function print(): void
    {
        echo 'print rectangle';
    }
}