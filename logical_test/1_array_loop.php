<?php 

$aplikasi[1]='gtAkademik'; 
$aplikasi[2]='gtFinansi'; 
$aplikasi[3]='gtPerizinan'; 
$aplikasi[4]='eCampuz'; 
$aplikasi[5]='eOviz';

$i=0;
while($i<count($aplikasi)){
    echo $aplikasi[$i+1]."<br/>";
    $i++;
}