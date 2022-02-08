<?php

namespace Data;

abstract class Location //abstract class tidak bisa dijadikan menjadi objek
{
    public string $name;
}

class city extends Location
{

}

class Province extends Location
{

}

class Country extends Location
{
    
}