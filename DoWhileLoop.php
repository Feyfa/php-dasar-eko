<?php

$counter = 100;

// jika menggunakan do while
// walaupun kondisinya tidak terpenuhi, pasti akan dijalankan 1 kali
do {
    echo "counter = $counter" . PHP_EOL;
    $counter++;
} while($counter <= 10);