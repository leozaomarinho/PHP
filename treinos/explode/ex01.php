<?php

    $string = 'carro-navio-helicoptero-barco-jangada';

    $stringArray = explode("-", $string);

    print_r($stringArray);

    echo "<br>";

    for($i = 0; $i<count($stringArray);$i++){

        echo "Item : $stringArray[$i]<br>";
    }

?>