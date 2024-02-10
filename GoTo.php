<?php

goto a;
echo "Hallo" . PHP_EOL;

a: 
echo "Dappa". PHP_EOL;

$counter = 1;

while(true) {
    echo "Hello Do while loop : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "Perulangan loncat ke selesai". PHP_EOL;