<?php

$counter = 1;

while ($counter <= 10) {
    echo "Ini Perulangan while loop ke-$counter" . PHP_EOL;
    $counter++;
}

// Penulisan menggunakan endwhile
while ($counter <= 10) :
    echo "Ini Perulangan while loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;