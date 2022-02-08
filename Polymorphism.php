<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Idad");
var_dump($company);

$company->programmer = new BackendProgrammer("Idad");
var_dump($company);

$company->programmer = new FrontendProgrammer("Idad");
var_dump($company);

sayHelloProgrammer(new Programmer("Idad"));
sayHelloProgrammer(new BackendProgrammer("Idad"));
sayHelloProgrammer(new FrontendProgrammer("Idad"));