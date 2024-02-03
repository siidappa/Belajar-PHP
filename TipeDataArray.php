<?php

$names = ["Dappa", "Naufal", "Fachrezi"];
var_dump($names[0]); // Mengakses data didalam array dengan menggunakan nomor index (dimulai dari 0)
$names[2] = "S.Kom"; // Mengubah data didalam array
$names[] = "M.kom"; // Menambah data array dengan nomor index yang paling terakhir
unset($names[2]); // Menghapus data array dengan nomor index 3 (index akan otomatis hilang)
var_dump(count($names)); // Mengambil total data yang ada pada array
var_dump($names);

echo "\n";

$arrayMap = [
    "id" => 0,
    "Nama" => "Dappa", // ==> Bentuk contoh Array sebagai Map di php
    "Nim" => 1234567
];

var_dump($arrayMap["Nama"]); 

echo "\n";

//Array Nested (Array didalam Array)
$arrayNested = [
    "id" => 1,
    "name" => "Dappa Naufal",
    "umur" => 17,
    "tanggal_lahir" => [
        "tanggal" => 9,
        "bulan" => "April",
        "tahun" => 2007
    ]
];

var_dump($arrayNested["name"], $arrayNested["tanggal_lahir"]["tanggal"]);