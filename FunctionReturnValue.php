<?php 

function sum(int $first, int $last): int
{
    $total = $first + $last;
    return $total;
}

echo sum(10, 10) . "\n";

function getFinalValue(int $value): string
{
    if($value >= 80) return 'A';
    else if($value >= 70) return 'B';
    else if($value >= 60) return 'C';
    else if($value >= 50) return 'D';
    else return 'E';
}

echo getFinalValue(56) . "\n";
echo getFinalValue(86) . "\n";