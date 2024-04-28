<?php 

function sayHello(string $name, callable $filter): void
{
    /*
    $filter = 'strtoupper'
    itu sama saja hasilnya dengan strtoupper($name);
    */

    /*
    $filter = 'strtolower'
    itu sama saja hasilnya dengan strtolower($name);
    */

    /*
    $filter = function (string $name) {
                    return strtoupper($name);
                }
    itu sama saja hasilnya dengan strtoupper($name);
    */
    
    /*
    $filter = fn (string $name) => strtoupper($name)
    itu sama saja hasilnya dengan strtoupper($name);
    */

    // call_user_func($filter, $name)
    // $filter adalah function nya
    // $name adala argument yang akan digunakan di dalam function $filter
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName\n";
}

sayHello('Jidan', 'strtoupper');
sayHello('Jidan', 'strtolower');
sayHello('Jidan', function (string $name) {
    return strtoupper($name);
});
sayHello('Jidan', fn (string $name) => strtoupper($name));
