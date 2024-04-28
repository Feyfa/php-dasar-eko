<?php 

$data = function () {
    echo "data";
};

// cek apakah ini string
var_dump(is_string($data));

// cek apakah ini boolean
var_dump(is_bool($data));

// cek apakah ini int
var_dump(is_int($data));

// cek apakah ini float
var_dump(is_float($data));

// cek apakah ini null
var_dump(is_null($data));

// cek apakah ini array
var_dump(is_array($data));

// cek apakah ini callable
var_dump(is_callable($data));