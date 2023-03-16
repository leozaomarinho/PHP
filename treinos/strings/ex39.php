<?php

$arr =[
    'porta' => 5,
    'vidro'=> 2000,
    'motor'=>5000,
    'retrovisor'=>10
];


function itensCaros($arr){

    $arrItemsCaros = [];

    foreach($arr as $item=>$preco){

        if($preco>10){
            array_push($arrItemsCaros,$item);
        };

    }

    return $arrItemsCaros;
}

$novoArr = itensCaros($arr);

print_r($novoArr);

?>