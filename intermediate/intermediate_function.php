<?php

// fungsi adalah blok kode yang akan dipanggil jika akan digunakan

function bilangHalo(){
    echo "halo";
}

function bilangNama($nama){
    echo "halo, ". $nama . "!";
}

bilangNama("aslan");
echo "<br/>";
bilangHalo();

for($i=0; $i<10; $i++)
{
    echo bilangHalo() . "<br/>";
}