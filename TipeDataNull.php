<?php

$name = "Dappa";
$name = null; //untuk unset value dari data nya
$age;

echo "Nama saya adalah $name";
var_dump(is_null($name)); //return bool

$contoh = "Naufal";
unset($contoh);
var_dump(isset($contoh));