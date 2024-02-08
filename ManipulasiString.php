<?php

$name = "Dappa Naufal";
// Concatenation
echo "Nama: " . $name . PHP_EOL;
echo "Nilai: " . 100 . PHP_EOL;

//Konversi number to sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueFloat = (float)"1.90";
var_dump($valueFloat);

// Mengakses karakter string
$name = "EKO";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// Variable Parsing (Interpolasi)
echo "Hello $name Selamat Datang" . PHP_EOL;

// Curly Brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;