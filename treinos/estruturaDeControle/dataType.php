<?php

    $nome = 'Leonardo';
    $idade = 19;
    $estudante = true;

    if(is_string($nome)===true){
        echo $nome.' é uma string;<br>';
    }
    else{
        echo $nome.' não é uma string<br>';
    };

    if(is_int($idade)==true){
        echo $idade.' é do tipo inteiro<br>';
    }
    else{
        echo $idade.' não é do tipo inteiro<br>';
    };

    if(is_bool($estudante)===true){
        echo $estudante.' é do tipo booleano<br>';
    }
    else{
        echo $estudante.' não é do tipo booleano<br>';
    };


?>