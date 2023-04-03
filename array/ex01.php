<?php

    $arr = [];

    $arr = range(10,45);

    for($i=0;$i<count($arr);$i++){
        $soma = $arr[$i]+6;

       

        if($soma>30){
            echo "$soma é um valor muito alto.<br>";
        }
        else{
         echo "$soma<br>";
        }
        
    };

?>