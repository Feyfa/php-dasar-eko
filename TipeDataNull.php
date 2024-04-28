<?php 

$nama = 'Jidan';

echo $nama;

$nama = null;

var_dump(is_null($nama));

$contoh = "Eko";

// isset digunakan untuk mengecek apakah variabel sudah dibuat atau belum
var_dump('isset($contoh) = ' . isset($contoh));

// digunakan untuk menghapus variabel
unset($contoh);

var_dump('isset($contoh) = ' . isset($contoh));

echo $contoh;
