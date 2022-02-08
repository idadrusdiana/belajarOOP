<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict1 as Conflict1; // use disini adalah buat impor, as disini adalah Alias
use Data\Two\Conflict2 as Conflict2; // use disini adalah buat impor
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 =new Conflict1();
$conflict2 =new Conflict2();

help();

echo APP . PHP_EOL; 