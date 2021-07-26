<div class="titulo">Interface</div>

<?php

 interface Gato{
     function mijar();
 }

 interface Cachorro extends Gato{
    function cagar(): string;
 }

 class Pessoa implements Cachorro{
     function mijar(){
         return 'Ação: Mijei';
     }

     function cagar(): string{
        return 'Ação: Caguei';
    }
 }

$ser = new Pessoa();
echo $ser-> cagar() . "<br>";
echo $ser-> mijar();