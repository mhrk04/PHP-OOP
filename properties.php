<?php
require_once "./data/Person.php"; // class telah dibuat di file ini
// person === object
$person = new Person();

$person->name = "Haziq";
$person->address = "Puchong";


echo "Nama : $person->name" . PHP_EOL;
echo "Nama : $person->address" . PHP_EOL;
echo "Nama : $person->country" . PHP_EOL;
