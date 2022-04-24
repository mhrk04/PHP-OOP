<?php

class Product
{
  protected string $name;
  protected int $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
  // function public get name
  public function getName(): string
  {
    return $this->name;
  }
  // function public get price
  public function getPrice(): int
  {
    return $this->price;
  }
}

class ProductDummy extends Product
{
  public function info()
  {
    echo "Name : $this->name" . PHP_EOL;
    echo "Name : $this->price" . PHP_EOL;
  }
}
