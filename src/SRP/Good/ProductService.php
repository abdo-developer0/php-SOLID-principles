<?php

namespace AbdoDeveloper0\PhpSolidPrinciples\SRP\Good;

class ProductService
{
    /**
     * The product for service.
     * 
     * @var Product $product
     */
    private Product $product;

    /**
     * Initialize product service.
     * 
     * @param Product $product
     * @return void
     * @example $service = new ProductService(new Product('labtop', 1, 1500);
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Show product detials.
     * 
     * @return void
     * @example $service->showProductDetials();
     */
    public function showProductDetials(): void
    {
        echo $this->product->getName();
        echo '<br>';

        echo $this->product->getQuantity();
        echo '<br>';

        echo $this->product->getPrice();
        echo '<br>';
    }

    /**
     * Add product to cart.
     * 
     * @return void
     * @example $service->addProductToCart();
     */
    public function addProductToCart(): void
    {
        // TODO: add to cart.
    }
}