<?php

function sum(int $first, int $last): int {
    $total = $first + $last;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

function getFinalValue(int $value) {
    if ($value >= 80) {
        return "A";
    } else if ($value >=70) {
        return "B";
    } else if ($value >=60) {
        return "C";
    }  else if ($value >=50) {
        return "D-";
    } else {
        return "Salah jurusan kali" . PHP_EOL;
    }

    echo "UPM". PHP_EOL;
}

$score = getFinalValue(100);
var_dump($score);
$score = getFinalValue(49);
var_dump($score);