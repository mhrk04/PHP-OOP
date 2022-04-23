<?php
require_once "./data/Person.php";

$person = new Person();
$person->name = "haziqrk";
$person->sayHello("haziq");
$person->sayHello(null);
