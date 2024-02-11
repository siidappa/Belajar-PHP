<?php

function sayHello($firstName, $lastName = "Siapa ya??") {
    echo "Hello, $firstName $lastName" . PHP_EOL;
}

sayHello("Dappa", "Naufal");

function sum(int $first, int $last) {
    $hasil = $first + $last;
    echo "Hasil: $first + $last = $hasil" . PHP_EOL;
}

sum(9, 90);
sum(100, 80);

function sumALL(...$values) {
    $total = 0;
    foreach($values as $v) {
        $total += $v;
    }
    echo "Total: " . implode(",", $values) . "= $total". PHP_EOL;
}

sumALL(1,2,3,4);