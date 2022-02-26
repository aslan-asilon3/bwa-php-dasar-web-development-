<?php
// Array
   
   // indexed array
   $a = ['BMW','Honda','Suzuki'];



   // associative array
   $b = [
       'Indonesia' => 'Nasi padang',
       'Singapura' => 'Nasi lemak',
       'Amerika'   => 'Steak',
   ];




   // multidimentional array
   $c = [
       'a' => $a,
       'b' => $b,
       'c' => [12,[3,5,1,10],3,5,1,90]
   ];
   echo $c['c'][1][1]; //output 5

