<?php 

$nilai = 70;
$absen = 90;


// cara pertama
if($nilai >= 80 && $absen >= 80) 
{
    echo "Nilai Anda A" . PHP_EOL;
} 
else if($nilai >= 70 && $absen >= 70) 
{
    echo "Nilai Anda B" . PHP_EOL; 
}
else if($nilai >= 60 && $absen >= 60) 
{
    echo "Nilai Anda C" . PHP_EOL;
}
else
{
    echo "Nilai Anda D Sangat Buruk Sekali, Ku Ingin Kau Mati Saja" . PHP_EOL;
}


// cara kedua
// cara pertama
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL; 
elseif($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
else :
    echo "Nilai Anda D Sangat Buruk Sekali, Ku Ingin Kau Mati Saja" . PHP_EOL;
endif;