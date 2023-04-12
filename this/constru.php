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

    function exibeCarro(){
        echo "Parabens ! Você comprou uma $this->marca de cor $this->cor modelo $this->modelo com $this->portas portas.";

    }

}

$bmw = new Car("branca","bmw","z4",'2');

$bmw->exibeCarro();


?>