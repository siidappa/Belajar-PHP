<?php

$nilai = 70;
$absen = 90;


if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai anda B". PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai anda C" . PHP_EOL;
endif;