<?php

$pessoa =['nome' => 'Leonardo', 'idade'=>18,'sexo'=>'M'];

if($pessoa['idade']>=18){
    
    echo $pessoa['nome'];
    echo ' é  Maior de idade!';
    echo '</br>';
    echo 'e seu sexo é: ';
    echo $pessoa['sexo'];
}
else{
    echo'Menor de idade!';
}
?>