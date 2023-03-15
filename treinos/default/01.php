<?php

    function defineCorCarro($cor = 'vermelha'){
       return "a cor do carro é $cor <br>";
    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho;
    $carroAmarelo = defineCorCarro('amarela');
    echo $carroAmarelo;

?>