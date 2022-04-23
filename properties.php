<?php
require_once "./data/Person.php"; // class telah dibuat di file ini
// person === object
$person = new Person();

$person->name = "Haziq";
$person->address = null;


echo "Nama : $person->name" . PHP_EOL;
echo "Alamat : $person->address" . PHP_EOL;
echo "Negara : $person->country" . PHP_EOL;
