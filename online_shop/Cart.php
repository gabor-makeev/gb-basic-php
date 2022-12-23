<?php

class Cart
{
    private array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function deleteProduct(Product $product): void
    {
        foreach ($this->products as $key => $cartProduct) {
            if ($cartProduct->getTitle() === $product->getTitle()) {
                unset($this->products[$key]);
                break;
            }
        }
    }

    public function getValue(): float
    {
        $value = 0;

        foreach ($this->products as $product) {
            $value += $product->getPrice();
        }

        return $value;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
