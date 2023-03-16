<?php

$string = 'O rato roeu a roupa do rei de roma';
$cont = 0;

for($i=0;$i<strlen($string);$i++){
    
    if($string[$i] ==='a'){
       $cont++;
    };


}

echo "O numéro de letras 'a' é de: {$cont}";

?>