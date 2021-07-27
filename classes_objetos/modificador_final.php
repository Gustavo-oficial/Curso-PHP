<div class="titulo">Modificador Final</div>

<?php

use Abstrata as GlobalAbstrata;
use Teste as GlobalTeste;

abstract class Abstrata{
    abstract public function metodo1();

    public final function metodo2(){
           echo "Da minha garrafa <br>";
    }
}

 class Normal extends Abstrata{
     public function metodo1(){
         echo "Bora la <br>";
     }
 }

 $bora = new Normal();
 $bora->metodo1();


 final class Teste{
     public $teste = "Teste";
 }

 $la = new Teste();
 echo $la->teste;
 # $bora->metodo2();


