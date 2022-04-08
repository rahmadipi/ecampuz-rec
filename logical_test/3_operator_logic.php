<?php

function hitung($a,$b){
    $bilangan1=$a; //bilangan pertama yg dibagi
    $bilangan2=$b; //bilangan kedua sebagai pembagi
    $hasil=0; //hasil pembagian
    $i=$bilangan2; //variabel untuk menyimpan jumlah perkalian
    while($i<=$bilangan1){
        $i=$i+$bilangan2;
        $hasil++;
    }
    echo $bilangan1." : ".$bilangan2." = ".$hasil;
}

hitung(7,2);
echo "<br/>";
hitung(8,4);