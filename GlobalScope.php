<?php 

// jika kita membuat variabel global
// maka php akan otomatis membuat ini
// $GLOBALS['name'] = 'Muhammad Jidan'
// $GLOBALS itu bisa di akses di file manapun
$name = "Muhammad Jidan";

function name()
{
    // digunkana untuk mengambil global variabel
    // jadi $name bisa digunakan di dalam function name
    global $name;
    echo "Hello $name\n";

    var_dump($GLOBALS);
}

name();