<?php
class Manager
{
  var string $name;
  var string $title;
  // :void == tiada return value
  public function __construct(string $name = "", string $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }
  function sayHello(string $name): void
  {
    echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
  }
}
// Inheritance
class VicePres extends Manager
{
  public function __construct(string $name = "")
  {
    parent::__construct($name, "VP");
  }

  // :void == tiada return value
  function sayHello(string $name): void
  {
    echo "Hi $name, my name is VP $this->name" . PHP_EOL;
  }
}
