<?php 

function increment()
{
    // karena bukan static maka siklus hidupnya hanya sekali function tersebut dijalankan
    // ketika function ini dijalankan maka akan mulai dari awal lagi, yaitu nilai $counter nya 1
    $counter = 1;

    echo "counter = $counter\n";

    $counter++;
}

increment();
increment();
increment();


function incrementStatic()
{
    static $counter = 1;

    echo "counter = $counter\n";

    $counter++;
}

incrementStatic();
incrementStatic();
incrementStatic();