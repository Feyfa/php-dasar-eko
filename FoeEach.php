<?php 

$names = ['Muhammad', 'Jidan', "Rafena"];

// tanpa menggunakan foreach
for($i = 0; $i < count($names); $i++)
{
    echo "data ke $i = $names[$i]\n";
}

// menggunaka foreach
foreach($names as $name)
{
    echo "data ke $name\n";
}

foreach($names as $index => $name)
{
    echo "data ke $index = $name\n";
}

$person = [
    'name' => 'Muhammad Jidan',
    'age' => 19,
    'heigh' => 164
];
foreach($person as $key => $value)
{
    echo "$key => $value\n";
}