<div class="titulo">Desafio</div>

<?php

require_once 'desafio_int_div.php';

use function \Aritmetica\intdiv;

try {
  echo intdiv(8, 3) . "<br>";
} catch (\Aritmetica\NaoInteiroException $e){
  echo "Resultado não é um numero inteiro <br>";
}

try{
    echo intdiv(8, 0);
} catch (DivisionByZeroError $e){
    echo "Divisão por zero <br>";
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 3). '<br>';