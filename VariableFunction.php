<?php

function foo() {
    echo "FOO". PHP_EOL;
}

function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo  "Hello, $finalName". PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sampleFunction("Eko", "sampleFunction");

$functionyangakandipanggil = "foo";
$functionyangakandipanggil();

sayHello("dappa", "strtoupper");
sayHello("Dappa", "strtolower");
