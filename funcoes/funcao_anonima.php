<div class="titulo">Função Anonima</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(3, 3);


 function executar($a, $b, $operacao, $funcao){
     $resultado = $funcao ($a, $b);
     echo " $a $operacao $b = $resultado";
 }
 
 echo "<br>";
 executar(2, 3, "+", $soma);

 function multiplicar($a, $b){
     return $a * $b;
}

echo "<br>";
@executar(5, 5, '*', multiplicar);
