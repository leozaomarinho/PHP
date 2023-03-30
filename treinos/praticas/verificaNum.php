<?php

    function verificaValor($valor){
        if($valor > 0){
            echo "$valor é positivo!";
        }
        else if($valor < 0){
            echo "$valor é negativo!";
        }
        else{
            echo "$valor é igual a zero!";
        }
    };

    verificaValor(-22);


?>