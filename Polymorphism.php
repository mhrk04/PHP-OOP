<?php
require_once "data/Programmer.php";

// polymorphism objek pelbagai bentuk
$company = new Company();
$company->programmer = new Programmer("Haziq");
var_dump($company);


$company->programmer = new BackEndPro("haizil");
var_dump($company);


$company->programmer = new frontendPro("Muhaimin");
var_dump($company);


sayHelloProgrammer(new Programmer("haziq"));
sayHelloProgrammer(new BackEndPro("haziq"));
sayHelloProgrammer(new frontendPro("haziq"));
