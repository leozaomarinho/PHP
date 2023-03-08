<?php

$a = 50;
$b = 5;
$c = 10;

$resultado = ($a - $b )* $c;

if (is_int($resultado)){
    echo 'O resultado é inteiro!<br>';
}
    else{
       echo 'O resultado não é inteiro!<br>';
    };

echo $resultado;

?>