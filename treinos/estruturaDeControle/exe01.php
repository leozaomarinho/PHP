<?php

$valor = 0;
$soma = 0;

while($valor<100){

    if($valor%2==0){
     $soma = $soma +$valor;
    }
    else{
        echo "{$valor} é impar<br>";
    }   

    $valor++;
}

echo "A soma dos valores pares de 1 a 100 é {$soma}";


?>