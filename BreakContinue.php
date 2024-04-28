<?php 


for($i = 1; $i <= 10; $i++) 
{
    // continue akan melanjutkan increment, dan tidak menjalankan kode di bawahnya
    if($i === 3) continue;
    // break akan memberhentikan blok kode
    else if($i === 5) break;

    echo "i = $i" . PHP_EOL;
}