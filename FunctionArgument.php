<?php 

function sayHello($firstName, $lastName = "Anonymous")
{
    echo "Hello $firstName $lastName\n";
}

sayHello("Muhammad", "Jidan");
sayHello("Muhammad"); 

sayHello(10, 20);

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "$first + $last = $total\n";
}

sum(100 , 100);
sum("5", "3");

function sumAll(...$values)
{
    $total = 0;
    foreach($values as $value)
    {
        $total += $value;
    }

    echo "total " . implode(" + ", $values) . " = $total\n";
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4);
sumAll(...$values);