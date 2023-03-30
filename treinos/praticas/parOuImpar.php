<?php

function parOuImpar($valor){

    if($valor % 2 == 0){
        echo "$valor é par!<br>";
    }
    else{
        echo "$valor é impar<br>";
    }
};

parOuImpar(2);
parOuImpar(3);
parOuImpar(11);
parOuImpar(0);



?>