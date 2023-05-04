<?php

$arr = [3,4,2,1,7];

function verificaMario($arr){

    foreach($arr as $ar){
        
        if($ar>$maior){
        $maior = $ar;
        };

    }

 echo "{$maior} é o maior número do Array";


}

echo verificaMario($arr);



?>