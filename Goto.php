<?php 

goto a;
// kode ini tidak dijalankan karena menggunakan goto akan lompat ke a:
echo "Hello World A\n";

a:
echo "Hello World B\n";

$counter = 0;
while(true)
{
    echo "counter = $counter\n";
    $counter++;

    if($counter > 5) goto b;
}

b:
echo 'Keluar dari loop\n';