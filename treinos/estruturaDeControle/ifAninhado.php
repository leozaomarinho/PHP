<?php

$num1= 49;
$num2= '52';


if(is_int($num1) || is_float($num1)){
    echo 'é do tipo númerico!<br>';
    $multiplicacao = $num1 *2;

        if($multiplicacao>100){
            echo $multiplicacao.' è maior que 100<br>';
        }

        else{
            echo $multiplicacao.' Não é maior que 100!<br>';
        };
}
else{
    echo 'não é um tipo númerico!.<br>';
}

if(is_int($num2) || is_float($num2)){
    echo 'é do tipo númerico!<br>';
    $multiplicacao = $num2 *2;

        if($multiplicacao>100){
            echo $multiplicacao.' è maior que 100<br>';
        }

        else{
            echo $multiplicacao.' Não é maior que 100!<br>';
        };

    }
else{
    echo 'não é um tipo númerico!.<br>';
}



?>