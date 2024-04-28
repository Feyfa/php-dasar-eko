<?php

// jika seperti ini, maka $c akan di increment dahulu, baru di masukan ke dalam $variabel $d
$a = 10;
$b = ++$a;

var_dump($a);
var_dump($b);


// jika seperti ini, maka $c akan dimasukan dahulu ke dalam $variabel $d, baru di increment
$c = 20;
$d = $c++;

var_dump($c);
var_dump($d);