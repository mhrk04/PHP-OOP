<?php
class Person
{
  var string $name;
  // ? == Nullable Properties
  var ?string $address;
  // default value
  var string $country = "Malaysia";

  // buat function

  function sayHello(string $name)
  {
    echo "Hai $name" . PHP_EOL;
  }
}
