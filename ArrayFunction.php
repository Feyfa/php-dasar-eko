<?php 

$data = [1,2,3,4,5,6,7,8,9,10];

var_dump(array_map(fn ($data) => $data * 100, $data));

// sorting dari besar ke kecil
rsort($data);
var_dump($data);

// sorting dari kecil ke besar 
sort($data);
var_dump($data);

$person = [
    'nama' => 'Muhammad Jidan',
    'age' => 19,
    'gender' => 'Laki-Laki'
];

var_dump(array_keys($person));
var_dump(array_values($person));