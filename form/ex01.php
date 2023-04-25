<?php

$nomes = ['leo','gabriel','elias'];

foreach($nomes as $nome){
    echo "{$nome}<br>";
}


$name = $_GET['nome'];
$idade = $_GET['idade'];

if($_GET['nome']==''){
  echo  "Digite um nome valido";
}
else{
    echo "Seu nome é ${name} e sua idade é ${idade}";
}
?>