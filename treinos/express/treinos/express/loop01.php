<?php

$cont = 2;

while($cont<30){
   

   

    if($cont ===24){

        echo '<br> o contador parou pois chegou em '.$cont;

        break;

    }
    else{
        $cont+=2;
        echo '<br>'.$cont;
    }

    

}

?>