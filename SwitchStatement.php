<?php

$nilai = 'C';

// cara ke-1
switch($nilai) 
{
    case 'A' : 
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;

    case 'B' :
    case 'C' :
        echo 'Anda Lulus' . PHP_EOL;
        break;

    default : 
        echo 'Anda Tidak Lulus' . PHP_EOL;
}

// cara ke-2
switch($nilai) :
    case 'A' : 
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;

    case 'B' :
    case 'C' :
        echo 'Anda Lulus' . PHP_EOL;
        break;

    default : 
        echo 'Anda Tidak Lulus' . PHP_EOL;
endswitch;