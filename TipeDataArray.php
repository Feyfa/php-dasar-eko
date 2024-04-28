<?php 

$values = array(10, 9 , 8, 7, 'Muhammad Jidan');
var_dump($values);

$names = ['Eko', 'Kurniawan', 'Khannedy'];
var_dump($names);

// untuk menampilkan elemen array di index 0
var_dump($names[0]);

// untuk mengganti value pada elemen di array
$names[0] = 'Muhammad';     
var_dump($names);

// untuk menghapus index di array
unset($names[1]);
var_dump($names);

// untuk menghitung panjang dari array
var_dump(count($names));

$sekolah = array(
    'nama' => 'SDN JATIPULO 03',
    'tahunberdiri' => 1990,
    "alamat" => 'jalan jatipulo'
);
var_dump($sekolah);
var_dump($sekolah['nama']);
var_dump($sekolah['tahunberdiri']);
var_dump($sekolah['alamat']);

$jidan = [
    'id' => 123,
    'gender' => 'man',
    'hobies' => [
        'rubix',
        'read book'
    ]
];
var_dump($jidan['hobies'][0]);
var_dump($jidan['hobies'][1]);