<?php

$verificaNum = function($num){
    if($num %2 ==0){
        echo "$num é par!<br>";
    }
    else{
        echo "$num é impar!<br>";
    }
};

$verificaNum(6);

?>