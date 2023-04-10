 <?php

 class Pessoa {
    public $nome;
    public $idade;

    function falar(){
        echo "até mais tarde!";
    }
 };

 $ronaldo = new Pessoa();

 $ronaldo->nome = 'Ronaldo';
 $ronaldo->idade = 23;

 echo "<br>";
 
 echo "Olá, meu nome é $ronaldo->nome, e eu tenho $ronaldo->idade anos.<br>";
 $ronaldo->falar();



?>