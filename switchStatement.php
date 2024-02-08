<?php

$nilai = "E";

switch ($nilai) :
    case "A" :
        echo "Kamu lulus dengan baik" . PHP_EOL;
    break;
    case "B" :
    case "C" :
        echo "Anda lulus" . PHP_EOL;
    break;
    default :
        echo "Kamu anak mana ? wkkwkw" . PHP_EOL;
endswitch;