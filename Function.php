<?php 


$buat = true;

// jika $buat = true maka sayHello() akan dibuat
// jika $buat = false maka sayHello() tidak akan dibuat, jika tidak dibuat maka tidak bisa digunakan
if($buat)
{
    function sayHello()
    {
        echo "Hello Function\n";
    }
}


sayHello();
sayHello();
sayHello();
sayHello();