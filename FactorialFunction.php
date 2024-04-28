<?php 

function factorialLoop(int $value): int
{
    $total = 1;

    for($i = 1; $i <= $value; $i++)
    {
        $total *= $i;
    }

    return $total;
}

echo factorialLoop(4) . "\n";
echo factorialLoop(5) . "\n";

// jika recursive terlalu dalam, maka ada kemungkinan terjadi memory overflow
function factorialRecursive(int $value): int
{
    if($value === 1) return 1;
    else return $value * factorialRecursive($value - 1);
}
echo factorialRecursive(4) . "\n";
echo factorialRecursive(5) . "\n";

function loopRecursive(int $value)
{
    if($value === 0) {
        echo "EndLoop\n";
    } else {
        echo "loop-$value\n";
        loopRecursive($value - 1);
    }
}

loopRecursive(30000000);

