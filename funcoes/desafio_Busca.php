<div class="titulo">Desafio Busca Recursiva</div>

<?php


$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

  function buscaRecursiva($array, $numeros = '>'){
    foreach($array as $result){
       if(is_array($result)){
           buscaRecursiva($result, $numeros . $numeros[0]);
       }else{
           echo "$numeros $result";
       }
    }
  }

  echo buscaRecursiva($array, "*");