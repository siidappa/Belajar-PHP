<?php

var_dump("10" == 10); // Output True karna dia ada type jugling ( konversi tipe data )
var_dump("10" === 10); // Output False karna tipe data nya berbeda ( ada proses pengecekan tipe data )
var_dump(10 != "6");
var_dump(100 !== 90);
var_dump(10 < 9); // Output nya false
var_dump(90 <= 10);
var_dump(9 >= 9); // Output true 
var_dump(110 > 100);