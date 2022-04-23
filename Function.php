<?php
require_once "./data/Person.php";

$person = new Person();
$person->name = "haziqrk";
$person->sayHello("haziq");
$person->sayHello(null);


// object use self when call const in same class
$person->info();
