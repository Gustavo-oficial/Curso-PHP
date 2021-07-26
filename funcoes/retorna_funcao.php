<div class="titulo">Retornar function</div>

<?php

function conta($number1){
     return function($number2) use ($number1){
         return $number1 + $number2;
     };
}

echo "Resultado: " . conta(20)(2);


$acrescimo = conta(2);

echo "<br><br>" . "Resultado acrescimo: " . $acrescimo(10);