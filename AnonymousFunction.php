<?php

$sayHello = function (string $name) {
    echo "Hallo, $name" . PHP_EOL;
};

$sayHello("Dappa");

function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo  "Hello, $finalName". PHP_EOL;
}

sayHello("Eko", function (string $name): string {
    return strtoupper($name);
});

$firstnam = "Dappa";
$lastname = "Naufal";

$helloSayid = function() use ($firstnam, $lastname) {
    echo "Hello $firstnam $lastname";
};

$helloSayid();