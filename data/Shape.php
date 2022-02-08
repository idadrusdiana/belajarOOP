<?php

namespace Data;

class Shape
{
    function getCorner():int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner():int
    {
        return 4;
    }

    public function getParentCorner():int
    {
        return parent::getCorner(); // untuk manggil function get corner yang pertama(shape)
    }
}
