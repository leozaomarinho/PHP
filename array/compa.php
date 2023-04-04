<?php

    $nome = 'leo';
    $idade = 24;
    $profissao = 'programador';

    $pessoa = compact('nome','idade','profissao');

    print_r($pessoa);

    if(isset($nome)=='leo'){
        echo "O $nome existe";
    }
    else{
        echo "Não existe.";
    }

    echo "<br>";
    echo "<br>";

    echo "<br>";


    foreach($pessoa as $carac =>$value){

        echo "$carac => $value <br>";

    }
?>