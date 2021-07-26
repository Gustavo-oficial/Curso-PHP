<div class="titulo">Construtor e Destrutor</div>

<?php


class Pessoa{

    public $nome;
    public $idade;

    function __construct($newName, $idade){
        $this->nome = $newName;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Destruido";
    }

    function apresentar(){
        echo "Nome: {$this->nome} " . "Idade: {$this->idade}";
    }
}


$teste = new Pessoa('Rodrigo', 40);
$teste-> apresentar();