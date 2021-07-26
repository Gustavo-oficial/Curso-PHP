<div class="titulo">Recursividade</div>

<?php

 function somaRecursiva($numero){
      $soma = 0;
      for(; $numero >= 1; $numero--){
          $soma += $numero;
      }
      return $soma;
 }

 echo "Normal: " . somaRecursiva(150);
 echo "<br>";
 echo "<br>";

 function somaRecursivaEconomica($numero){
     return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
 }

 echo "Economica: " . somaRecursivaEconomica(150);
 echo "<br>";
 echo "<br>";

 function somaRecursivaAte($numero){
     if($numero === 1){
        return 1;
     } else{
        return $numero + somaRecursivaAte($numero - 1);
     } 
}

echo "Até: " . somaRecursivaAte(150);
echo "<br>";
echo "<br>";