<div class="titulo">Herança</div>

<?php


class Pessoa{

    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Pessoa destruida";
    }

    public function apresentar(){
        echo "<br>Nome: {$this->nome} <br> " . "Idade: {$this->idade}";
    }
}



  class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    function __destruct(){
        echo "Usuario destruido";
    }

    public function apresentar(){
        echo "Login: {$this->login}";
        parent::apresentar();
    }
}

$usuario = new Usuario('Gustavo', 20, '@gustavo');
$usuario->apresentar();
