<?php 

$sayHello = function (string $name) {
    echo "Hello $name\n";
};

$sayHello("Jidan");
$sayHello("Fena");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName\n";
}

// selalu di ingat jika membuat sebuah function annonymous atau closure, itu akan selalu mengembalikan sesuatu, bisa dibilang pasti menggunakan return
sayGoodBye("Muhammad Jidan", function (string $name) {
    return strtoupper($name);
});

$name = 'Kopi';
$price = 10_000;

// use itu digunakan untuk mengakses variabel yang di luar function atau blok
$product = function () use($name, $price) {
    echo "name\t= $name\n";
    echo "price\t= $price\n";
};

$product();

// walaupun telah membuat ini, $name dan $price yang ada di use akan tetap mengambil yang berada di sebelum function nya
// karena saat menggunakan use, itu variabel nya di copy
$name = 'Risol';
$price = 2000;

$product();