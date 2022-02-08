<?php

require_once 'data/Person.php';

$idad = new Person();
$idad->name = "Idad";
$idad->sayHello("Budi");

$rusdiana = new Person();
$rusdiana->name = "Rusdiana";
$rusdiana->sayHello("null");

$idad->info();
$rusdiana->info();