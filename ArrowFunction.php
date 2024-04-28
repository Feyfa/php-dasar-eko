<?php 

$firstName = "Muhammad";
$lastName = 'Jidan';

// jia menggunakan arrow function, itu bisa mengambil $variabel dari luar scope nya tanpa harus menggunakan use
$sayHello = fn () => "Hello $firstName $lastName\n";

var_dump($sayHello());