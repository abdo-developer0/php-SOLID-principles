<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\SRP\Good;

class Product
{
    /**
     * The name of product.
     * 
     * @var string $name
     */
    private string $name;

    /**
     * The quantity of product.
     * 
     * @var int $quantity
     */
    private int $quantity;

    /**
     * The price of product.
     * 
     * @var int $price
     */
    private int $price;

    /**
     * Initialize product.
     * 
     * @param string $name
     * @param int $quantity
     * @param int $price
     * @return void
     */
    public function __construct(string $name, int $quantity, int $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

     /**
     * Get the name of product.
     * 
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the quantity of product.
     * 
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Get the price of product.
     * 
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}