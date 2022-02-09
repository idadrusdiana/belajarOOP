<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";

try{
    validateLoginRequest($loginRequest);    
    echo "VALID". PHP_EOL;
} catch (ValidationException | Exception $exception){ //catch bisa menangkap beberapa class exception
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace()); // untuk mengecek informasi error
} finally {
    echo "ERROR ATAU ENGGAK, AKAN DIEKSEKUSI" . PHP_EOL;
}
