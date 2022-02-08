<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone"); // set buat merubah data
$category->setExpensive(true);

$category->setName("      ");
echo "Name : {$category->getName()}" . PHP_EOL; // get buat manggil data
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;