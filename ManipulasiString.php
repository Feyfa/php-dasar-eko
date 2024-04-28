<?php

$name = 'Muhammad Jidan';

// PHP_EOL = \n
echo "Name : " . $name . PHP_EOL;
echo "Name : " . $name . "\n";

$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "100";
var_dump($valueInt);

$valueFloat = (float) "10.123";
var_dump($valueFloat);

$name = "Jidan";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

echo "Halo $name, Selamat Belajar PHP" . PHP_EOL;
echo "Halo {$name}s, Selamat Belajar PHP" . PHP_EOL;