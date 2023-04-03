<?php

    $pessoa = [

        [1,2,3,4],
        [2,4,6,8],
        [1,3,5,7]
    ];

    //loop no array externo 
    for($i=0;$i<count($pessoa);$i++){

        //imprimindo array
       echo "Imprimindo array externo: " .($i);

       for($j=0;$j<count($pessoa[$i]); $j++){

        echo $pessoa[$i][$j] ."<br>";

       };

    };

?>