<?php

// perbedaan while dan do while
//while akan di cek dulu baru di jalankan
#do while dijalankan dulu baru di cek

$a = 1;

do {
    echo "saya bernilai ". $a . "</br>";
    $a++;
}while ($a <= 10);
