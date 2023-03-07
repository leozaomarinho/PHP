<?php

    $velCarro =35;
    $veloMax = 40;

    if($velCarro<$veloMax){
        echo 'Esta na velocidade Correta!<br>';
    }
    else if ($velCarro == $veloMax){
        echo 'Tome cuidado com a velocidade!<br>';
    }
    else{
        echo 'multado por excesso de velocidade!';
    }

?>