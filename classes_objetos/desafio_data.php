<div class="titulo">Desafio Data</div>

<?php

class Cliente{
    public $nome = 'Gustavo';
    public $idade = 19;
    public $dia = 20;
    public $mes = 07;
    public $ano = 2002;
 
    public function apresentar(){
         echo "Nome: {$this->nome}" . "<br>Idade: {$this-> idade}" . "<br> Data: {$this->ano}/{$this->mes}/{$this->dia}<br>";
    }
 }
 
 $cliente = new Cliente();
 $cliente->apresentar();