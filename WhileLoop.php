<?php

$counter = 0;
while($counter <= 10) {
    echo "counter = $counter" . PHP_EOL;
    $counter++;
}


$counter = 10;
while($counter >= 0) :
    echo "counter = $counter" . PHP_EOL;
    $counter--;
endwhile;