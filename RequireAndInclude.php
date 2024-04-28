<?php 


// require, jika file tidak ditemukan, maka akan membuat error dan kode php setelahnya tidak akan dijalankan lagi
require "lib/MyFunction1.php";
// sama saja dengan require, bedanya jika sebelumnya menggunakan file yang sama, maka tetap load sekali saja 
require_once "lib/MyFunction1.php";

// include, jika file tidak ditemukan, maka hanya memberikan warning, dan kode setelahnya masih dapat dijalankan
// include "lib/MyFunction1.php";
// sama saja dengan include, bedanya jika sebelumnya menggunakan file yang sama, maka tetap load sekali saja 
// include_once "lib/MyFunction1.php";

echo "Ini Adalah Kode Pertama\n";
echo MyFunction('Muhammad', 'Jidan') . "\n";
