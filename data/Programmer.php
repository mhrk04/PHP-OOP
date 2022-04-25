<?php
class Programmer
{
  public string $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class BackEndPro extends Programmer
{
}
class frontendPro extends Programmer
{
}


class Company
{
  // polymorphism
  public Programmer $programmer;
}


function sayHelloProgrammer(Programmer $programmer)
{
  // object type check
  if ($programmer instanceof BackEndPro) {
    echo "Hello Back-End Programmer $programmer->name" . PHP_EOL;
  } elseif ($programmer instanceof frontendPro) {
    echo "Hello Front End Programmer $programmer->name" . PHP_EOL;
  } elseif ($programmer instanceof Programmer) {
    echo "Hello Programmer $programmer->name" . PHP_EOL;
  }
}
