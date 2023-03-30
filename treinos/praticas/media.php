<?php

$arr=[5,8,8];

for($i=0;$i<count($arr);$i++){

    $soma += $arr[$i];

};

$media = ($soma/3);
$media  = number_format($media,1);



if($media>=6){
    echo "Sua nota é $media , você foi aprovado!";
}
else{
    echo "Sua nota é $media , você foi reprovado";
};



?>