<?php

$counter = 1;

//Break
while(true) {
    echo "Hello Do while loop : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

//Continue
for ($counters = 0; $counters <= 100; $counters++) {
    if ($counters % 2 == 1) {
        continue;
    }
    echo "Hello Continue " . $counters . PHP_EOL;
}