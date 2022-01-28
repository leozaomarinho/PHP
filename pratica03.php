<?php

    $nome = 'leonardo marinho';
    $nivelAcc = 1;
    $senha = '12345';


    if($nome == 'leonardo marinho'&& $senha == '12345'){
        $IniciaSessao = 1;
    }
    else{
        $IniciaSessao =0;
    }

    switch($nivelAcc)
    {
    case 1:
        if($IniciaSessao == 1){
            echo 'você possui acesso de administrador';
            echo '</br>';
            echo 'Sessão inciada.';
        }
        break;
    default:
        echo 'você não possui acesso de administrador'; 
        echo '</br>';
        echo 'a sessão não pode ser iniciada.';
    }

?>