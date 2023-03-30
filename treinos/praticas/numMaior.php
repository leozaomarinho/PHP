<?php

    function crescente ($a,$b){
        if($a>$b){
            echo "'$b'"."'$a'<br>";
        }
        else if ($b>$a){
            echo "'$a'"." '$b'<br>";
        }

    };

    crescente(4,5);
    echo "<br>";
    crescente(12,5);
    



?>