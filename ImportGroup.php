<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as con, Dummy, Sample};
use function Helper\{helpMe};
use const Helper\APP;


$sa = new con();
$sa2 = new con();

helpMe();
echo APP . PHP_EOL;
