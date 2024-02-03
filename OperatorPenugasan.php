<?php
$total = 10;

$buah = 5000;
$chiken = 5000;
$jus = 5000;

$total += $buah;
$total *= $chiken;
$total -= $jus;
$total /= $chiken;
$total %= $buah;

var_dump($total);