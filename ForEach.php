<?php

$names = ["Dappa", "Naufal", "Fachrezi"];

foreach ($names as $index => $name) {
    echo "Halo, $index = $name" . PHP_EOL;
}

$person = [
    "first_name" => "dappa",
    "middle_name" => "naufal"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}