<?php

$a = 10;

// ini adalah references
// artinya $b itu menggunakan alamat address yang sama dengan $a
// makanya ketika $b diubah maka otomatis $a akan berubah juga
$b = &$a;

$b = 1234;

echo $a . "\n";
echo $b . "\n";

function kali100(int &$number)
{
    $number *= 100;
}

$num = 123;
echo $num . "\n";

kali100($num);
echo $num . "\n";


// digunakan untuk mengembalikan referensi dari static $value = 100;
function &getValue()
{
    static $value = 100;
    return $value;
}

$aa = &getValue();
$aa = 200;
echo $aa . "\n";

$bb = &getValue();
$bb = 400;
echo $bb . "\n";