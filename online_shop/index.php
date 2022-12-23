<?php

require_once "Product.php";
require_once "Cart.php";

$motherboard = new Product("Motherboard", 10);
$hardDrive = new Product("Hard drive", 20);
$cpu = new Product("CPU", 30);

$pc = new Product("PC", 0, [
    $motherboard,
    $hardDrive,
    $cpu
]);

$gpu = new Product("GPU", 300);

$pc->addComponent($gpu);

echo "Product '{$pc->getTitle()}' has price of {$pc->getPrice()}" . PHP_EOL;

$cart = new Cart();

$cart->addProduct($pc);
$cart->addProduct($gpu);
$cart->addProduct($hardDrive);
$cart->addProduct($hardDrive);
$cart->deleteProduct($hardDrive);
$cart->addProduct($hardDrive);

$cartProducts = $cart->getProducts();

echo "Cart consists of the following products:" . PHP_EOL;

foreach ($cartProducts as $cartProduct) {
    echo "{$cartProduct->getTitle()}: {$cartProduct->getPrice()}" . PHP_EOL;
}

echo "Total value of the cart: {$cart->getValue()}" . PHP_EOL;
