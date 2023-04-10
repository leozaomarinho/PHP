<?php
class Cachorro{


    function latir(){
        echo "Au au!";
    }

    function andar(){
        echo "Andando!";
    }
};


$viralata = new Cachorro;

$viralata->latir();
echo "<br>";
$viralata->andar();

?>