<?php

class Carro {

   public $cor;
   public $marca;
   public $velocidadeMaxima;

   function setVelocidadeMaxima($vel){
    $this->$velocidadeMaxima = $vel;
   }

   function getVelocidadeMaxima(){
    echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h<br>";
   }

};

$bmw = new Carro;
$bmw->cor = "Branca";
$bmw->marca = "Bmw";

$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();

?>