<?php

    class Humano {

        public $olhos = 2;
        public $bracos = 2;

        public function falar(){

            echo "Olá mundo!<br>";

        }

        private function CursoSuperior(){
            $curso  = "Mestrado concluido";
        }

        public function getCurso($curso){
           return this->curso;
        }

    };

    class Professor extends Humano {
        public $estudou = true;

        public function Ensinar(){
            echo "Repita comigo, vou aprender!<br>";
        }
    }

    $leo = new Humano;

    $luan = new Professor;

    echo "$luan->bracos<br>";

    $luan->falar();

    

    $luan->Ensinar();

    if($luan instanceof Humano){
        echo " Luan é humano";
    };



?>