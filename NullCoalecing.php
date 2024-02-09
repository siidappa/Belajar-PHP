<?php

$var = [
    "aksi" => "Punya"
];
$hasil = $var["aksi"] ?? "Ga Punya" . PHP_EOL;
echo $hasil;