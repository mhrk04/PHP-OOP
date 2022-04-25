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
  echo "Hello Programmer $programmer->name" . PHP_EOL;
}
