<?php
class Person
{
  // Constant
  const AUTHOR = "Mhaziqrk";
  var string $name;
  // ? == Nullable Properties
  var ?string $address;
  // default value
  var string $country = "Malaysia";
  // membuat construct
  function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }
  // buat function

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hai, my name is $this->name" . PHP_EOL;
    } else {
      echo "Hello $name,my name is $this->name" . PHP_EOL;
    }
  }
  function info()
  {
    echo "Author:" . self::AUTHOR . PHP_EOL;
  }
}
