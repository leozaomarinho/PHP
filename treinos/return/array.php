<?php

$arr = [];

for($i = 0;$i < 30; $i++){

    array_push($arr,$i);


}

print_r($arr);//

function arrayMaiorQueSete($array){
 
    $arrayVazio = [];

    for($j= 0; $j< count($array);$j++){
        
        array_push($arrayVazio, $array[$j]);


    };


    return $arrayVazio;

}

$novoArray = arrayMaiorQueSete($arr);

print_r($novoArray);

?>