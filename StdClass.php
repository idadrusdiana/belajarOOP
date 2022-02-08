<?php

$array = [
    "firstName" => "Idad",
    "middleName" => "Rusdiana",
    "lastName" => "Ganteung"
];

$object = (object)$array; // cara untuk mengconvert tipe data array ke object

var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Midlle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);