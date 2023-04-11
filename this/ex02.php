<?php

    class Humano {

        public $olhos = 2;
        public $braços = 2;
        public $cabelo = false;

        public function falar(){

            echo "Olá mundo!<br>";

        };

        private function CursoSuperior(){
            echo "Mestrado concluido";
        };

        public function consultaCurso(){
            echo CursoSuperior();
        };

    };

    class Professor extends Humano {
        public $estudou = true;

        public function Ensinar(){
            echo "Repita comigo, vou aprender!<br>";
        };
    }

    $leo = new Humano;

    $leo->falar();



?>