<?php

require_once 'data/Person.php';

$person = new Person();
$person->name = "Idad";
$person->address = null;


var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "Budi";
$person2->address = "Jakarta";


var_dump($person2);

// //error
// $person->name = [];