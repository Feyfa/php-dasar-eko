<?php 

// ini nilai nya ture, maka tidak akan pernah berhenti
// for(;;) {
//     echo "Ini Adalah For Loop" . PHP_EOL;
// }

// $counter = 0;
// for(; $counter <= 10;) {
//     echo "counter = $counter" . PHP_EOL;
//     $counter++;
// }

// for($counter = 0; $counter <= 10;) {
//     echo "counter = $counter" . PHP_EOL;
//     $counter++;
// }

// for($counter = 10; $counter >= 0; $counter--) {
//     echo "counter = $counter" . PHP_EOL;
// }

for($counter = 10; $counter >= 0; $counter--) :
    echo "counter = $counter" . PHP_EOL;
endfor;