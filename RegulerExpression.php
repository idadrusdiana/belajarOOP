<?php

$matches = [];
$result = preg_match_all("/idad|ana|ung/i", "Idad Rusdiana Ganteung", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT"); //supaya replace kata

var_dump($result);

$result = preg_split("/[\s,-]/","Idad Rusdiana Ganteung,Programmer,Zaman-Now");

var_dump($result);

