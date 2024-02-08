<?php
// Operator Array Union (mengabungkan dua buah array)
$first = [
    "name_firts" => "Dappa"
];
$last = [
    "last_name" => "Naufal"
];
var_dump($first + $last);
echo $first["name_firts"] . " ". $last["last_name"]; // Concatenate (Penggabungan)

echo "\n";

// Operator Array Equality & Identity
$aName = [
    "name_firts" => "Dappa",
    "last_name" => "Naufal"
];
$bName = [
    "last_name" => "Naufal",
    "name_firts" => "Dappa"
];
var_dump($aName == $bName); // operator ini ngecek apakah key dan value pada kedua array sama maka hasil nya true
var_dump($aName === $bName); // operator ini ngecek apakah key dan value pada keduanya sama lalu dicek apakah posisi nya itu berbeda atau tidak kalau berbeda maka akan dianggap false

echo "\n";

// Operator Inequlity