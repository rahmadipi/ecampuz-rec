<?php

$bilangan1=7; //bilangan pertama yg dibagi
$bilangan2=2; //bilangan kedua sebagai pembagi
$hasil=0; //hasil pembagian
$i=$bilangan2; //variabel untuk menyimpan jumlah perkalian
while($i<=$bilangan1){
    $i=$i+$bilangan2;
    $hasil++;
}
echo $hasil;