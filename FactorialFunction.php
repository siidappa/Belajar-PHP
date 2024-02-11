<?php

function factorialFunction(int $value): int {
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

function factorialLoopRecursive(int $value): int {
    if($value == 1):
        return 1;
    else :
        return $value * factorialLoopRecursive($value - 1);
    endif;
}

var_dump(factorialFunction(9));
var_dump(factorialLoopRecursive(8));

## Recursive Function Hell 💀 (Membuat Processor dan Ram Usage Tinggi)
function loop(int $value) {
    if ( $value == 0 ) {
        echo "Endloop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(2700000);