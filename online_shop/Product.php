<?php

class Product
{
    private string $title;
    private float $price;
    private array $components;

    public function __construct(string $title, float $price, ?array $components = [])
    {
        $this->title = $title;
        $this->price = $price;
        $this->components = $components;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        if ($this->components) {
            $price = 0;

            foreach ($this->components as $component) {
                $price += $component->getPrice();
            }

            return $price;
        }

        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function addComponent(Product $component): void
    {
        $this->components[] = $component;
    }
}
