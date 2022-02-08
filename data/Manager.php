<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name):void
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager{

    public function __construct(string $name = "")
    {
        //tidak wajib, tapi do rekomendasikan
        parent::__construct($name, "vp"); 
    }

    function sayHello(string $name):void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL; 
    }
}