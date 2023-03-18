<?php

    $str = 'este item esta em';
    $fato = 'promocao';

    function transforma($str,$fato){

     $novaStr = ucfirst($str);
     $fato = strtoupper($fato);


        echo "$str $fato";


    }

transforma($str,$fato);

?>