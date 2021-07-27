<div class="titulo">Metodos Magicos</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa{
     public $nome;
     public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
      echo "Destruido"; 
    }

    function __toString()
    {
        return "{$this->nome} esta com {$this->idade} anos <br>";
    }

    function mostrar(){
        echo  $this . " <br>";
    }

    function __get($name)
    {
        echo " Parametro '{$name}' não encontrado. <br>";
    }

    function __set($name, $value)
    {
        echo " Parametro '{$name}' não encontrado, " . "com os seguintes dados: {$value}";
    }

    function __call($name, $arguments)
    {
        echo "Tentando executar método '${name}'";
        echo ", com os parametros: ";
        print_r($arguments);
    }
 }

 $user = new Pessoa('Gustavo', 19);
 $user->mostrar();


 # echo $user->Sobrenome;echo $user->Sobrenome;
 echo $user->Sobrenome = 'ddss';

 echo '<br>';
 echo '<br>';
 # $user->exec(1, 'teste', true, [1, 2, 3]);