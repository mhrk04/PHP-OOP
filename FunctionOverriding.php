<?php
require_once "./data/Manager.php";


$manager = new Manager();
$manager->name = "haziq";
$manager->sayHello("Amar");


$vp = new VicePres();
$vp->name = "Jamil";
$vp->sayHello("Hamdan");
