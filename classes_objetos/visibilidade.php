<div class="titulo">Visibilidade</div>

<?php

 class Teste {
     public $publico = 'azinho';
     protected $protegido = 'a';
     private $privado = 'azao';

     protected function Protecao(){
         echo " <br> - Só para voce<Br>";
     }

     function mostrarA(){
         echo "<br>Publica: {$this->publico} <br>";
         echo "Protegida: {$this->protegido} <br>";
         echo "Privada: {$this->privado} <br>";
     }
 }

 $a = new Teste();
 $a-> mostrarA();

 class Teste2 extends Teste{

     function mostrarTeste(){
         echo "- Migracao: {$this->protegido}";
         parent::Protecao();
         echo "<br> Burlando: ";
         parent::mostrarA();
     }
 }

 echo "<hr>";
 echo "Acessando classe protegida: <br>";
 $b = new Teste2();
 $b-> mostrarTeste();
