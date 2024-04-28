<?php 

function name()
{
    $name = 'Muhammad Jidan';
    echo "name =  $name\n";
}

name();
// tidak bisa karena $name itu merupakanm local scope
// jadi tidak bisa diakses di luar scope function name
echo "name = $name \n";