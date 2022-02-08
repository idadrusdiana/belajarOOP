<?php

trait A {
    function doA()
    {
        echo "a" . PHP_EOL;
    }

    function doB()
    {
        echo "b" . PHP_EOL;
    }
}

trait B {
    function doA()
    {
        echo "A" . PHP_EOL;
    }

    function doB()
    {
        echo "B" . PHP_EOL;
    }
}

class Sample
{
    use A, B {
        A::doA insteadOf B; //Untuk function doA mau makai A dari pada yang B
        B::doB insteadOf A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();