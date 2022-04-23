<?php
class Manager
{
  var string $name;
  // :void == tiada return value
  function sayHello(string $name): void
  {
    echo "Hi $name, my name is $this->name" . PHP_EOL;
  }
}
// Inheritance
class VicePres extends Manager
{
}
