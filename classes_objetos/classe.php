<div class="titulo">Primeira classe</div>

<?php

class Cliente{
   public $nome = 'Gustavo';
   public $idade = 19;

   public function apresentar(){
        echo "Nome: {$this->nome} <br>";
   }
}

$cliente = new Cliente();
$cliente-> apresentar();

$cliente2 = new Cliente;
$cliente2->nome = 'Felix';
$cliente2-> apresentar();