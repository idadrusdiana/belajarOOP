<?php

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Date\Food());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");