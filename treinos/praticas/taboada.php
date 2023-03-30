<?php


function taboada($valor){

    for($i = 1;$i<=10;$i++){
        
        $exibe = ($valor*$i);

        echo "$valor x $i é igual a: $exibe<br>";

    }

};

    taboada(1);
    echo "<br>";
    taboada(5);

?>