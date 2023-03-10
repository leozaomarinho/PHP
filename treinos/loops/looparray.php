<?php

    $nomes = ["Pedro", "João", "Maria","Leo"];

    array_push($nomes, 'Thays');

    foreach($nomes as $nome){
        echo "O nome do indice atual é $nome <br>";

        if($nome === 'Thays'){
            echo "O nome foi inserido ao array!<br>";
        };
    }

    print_r($nomes);

?>