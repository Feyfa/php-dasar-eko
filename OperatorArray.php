<?php 

$first = [
    'first_name' => "Muhammad"
];

$last = [
    'first_name' => 'Rafena',
    'last_name' => 'Jidan'
];

$full = $first + $last;
var_dump($full);

$a = [
    'first_name' => 'Rafena',
    'last_name' => 'Jidan'
];

$b = [
    'last_name' => 'Jidan',
    'first_name' => 'Rafena',
];

// tidak  memperhatikan urutan elemen
var_dump($a == $b);
// memperhatikan urutan elemen
var_dump($a === $b);