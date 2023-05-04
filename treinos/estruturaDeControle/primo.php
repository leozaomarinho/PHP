<?php

$num = 2;

while($num<=1000){

    if($num%1==0&&$num%$num==0){
        echo "{$num} é primo!<br>";
    }
    else{
        echo "{$num} não é primo!<br>";
    }

    $num++;
}

?>