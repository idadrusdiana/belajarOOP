<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "idad";
$request->password = "rahasia";
// ValidationUtil::validate($request);

ValidationUtil::ValidateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register =  new RegisterUserRequest();
$register->name = "";
$register->address = "";
$register->email = "";

ValidationUtil::ValidateReflection($register);

// ValidationUtil::validate($register);


