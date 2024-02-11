<?php

function sayHello(string $name, callable $filter) {
    $call = call_user_func($filter, $name);
    echo "Hallo, $call" . PHP_EOL;
}

sayHello("Dappa", "strtoupper");
sayHello("DAPPA", "strtolower");
sayHello("Naufal", fn($name) => strtoupper($name));