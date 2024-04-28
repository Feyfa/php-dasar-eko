<?php 

echo "Name : "; 
echo "Muhammad Jidan";
echo "\n";

echo 'Nama : ';
echo "Muhammad\t Jidan\t Ganteng\n";

$nama = "Muhammad Jidan";
echo <<<JID
hai perkenalkan nama saya $nama
umur saya 19 tahun
saya masih semangat belajar php
JID;

$nama = 'Rafeyfa Zulfiyani';
echo <<<'FENA'
hai perkenalkan nama saya "$nama"
umur saya 19 tahun
saya masih semangat belajar php
FENA;