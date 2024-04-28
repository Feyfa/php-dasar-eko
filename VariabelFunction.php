<?php 

function hello()
{
    echo "Hello World\n";
}

function name($name)
{
    echo "name = $name\n";
}

// ini adalah kekuatan variabel function
// ini sama saja menjalankan hello()
$strFunction1 = 'hello';
$strFunction1();

// ini adalah kekuatan variabel function
// ini sama saja menjalankan name("jidan");
$strFunction2 = 'name';
$strFunction2("jidan");

function sayHello(string $name, string $filter)
{
    $finalName = $filter($name);
    echo "Hello $name\n";
}

sayHello('Jidan', 'strtoupper');
sayHello('JIDAN', 'strtolower');