<?php

    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];


//lembrar de utilizar a função count($array) para percorrer o array.
    for($i=0; $i<count($arr);$i++){

        if($arr[$i] %2 == 0){
            echo "$arr[$i] é par!<br>";
        }

    }

?>