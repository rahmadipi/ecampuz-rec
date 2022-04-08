<?php 

$print="";
for($i=1;$i<=50;$i++){
    if($i%3==0){
        $print.="Foo";
    }
    if($i%5==0){
        $print.="Bar";
    }
    echo $i." : ";
    echo $print."<br/>";
    $print="";
}