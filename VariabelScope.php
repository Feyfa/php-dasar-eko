<?php 

// variabel global scope
$name = "Eko";

function name()
{
    // tidak bisa diakses di dalam function
    echo $name . "\n";
}

name();