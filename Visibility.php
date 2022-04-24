<?php
require_once "data/Product.php";

$product = new Product("Orange", "10");


echo $product->getName() . PHP_EOL;
echo  $product->getPrice() . PHP_EOL;


$dumy = new ProductDummy("Apple", "50");

$dumy->info();
