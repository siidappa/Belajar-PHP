<?php

$a = 10;
$b = 10;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultNegative = +$result;
var_dump($resultNegative);

$resultModulus = 100 % 3;
var_dump($resultModulus);