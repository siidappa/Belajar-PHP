<?php

$firstname = "Dappa";
$lastname = "Naufal";

$arrowFunction = fn() => "Hello $firstname $lastname" . PHP_EOL;

echo $arrowFunction("Dappa");