<?php

    class Cliente{

        public $nome;
        public $saldo;
        
       public function depositar($valorDep){
    
            if($valorDep>0){

                $this->saldo +=$valorDep;

                echo "Voce depositou {$valorDep} R$";

            }
            else{
                echo "Digite um valor de deposito valido!";
            }

        };

        public function consultaSaldo(){
            echo "o seu saldo atual é {$this->saldo} R$"
        }

    }

?>