<?php

class Car {

   public $cor;
   public $marca;
   public $modelo;
    public $portas;

    function __construct($cor,$marca,$modelo,$portas){

        $this->cor = $cor;
        $this->marca = $marca;
        $this->modelo =$modelo;
        $this->portas=$portas;

    }

}

$bmw = new Car("branca","bmw","z4",'2');

echo "Você comprou uma $bmw->marca de cor $bmw->cor modelo $bmw->modelo com $bmw->portas portas.";

?>