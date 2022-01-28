<?php

$idade = 15;
$peso = 50.1;

if($idade>=16&&$idade<=69){
    if($peso>=50){
        echo 'Atende aos requisitos';
    }
    else{
        echo 'Peso ou idade inferior ao necessário, não atende aos requisitos';
    }
}
else{
    echo 'Não atende aos requisitos';
}

?>