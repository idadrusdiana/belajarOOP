<?php

class Person
{
    const AUTHOR = "Programmer Zaman Idad"; //constanta di dalam class

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if(is_null($name)){
            echo "Hi, my name is {$this->name}" . PHP_EOL; //this untuk objek yang sama
        } else {
            echo "Hello $name, My name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL; //self untuk class yang sama
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}