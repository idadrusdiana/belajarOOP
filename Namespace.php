<?php

namespace { // global namespace

    require_once "data/Conflict.php";
    require_once "data/Helper.php";
    
    //membuat object dari namespace
    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();
    
    echo Helper\APPLICATION . PHP_EOL;
    
    Helper\helpMe();
}
