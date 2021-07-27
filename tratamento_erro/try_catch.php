<div class="titulo">Try Catch</div>

<?php

echo "Exemplo 1: ";
try {
   echo intdiv(7,0);
}catch (Error $e) {
    echo "Erro na execução <br>";
}

echo "Exemplo 2: ";
try {
    throw new Exception('Algo esta errado');
    echo intdiv(7,0);
 }catch (DivisionByZeroError $e) {
     echo "Divisão por zero <br>";
 } catch(Throwable $e){
     echo "Erro: " . $e->getMessage() . "<br>";
 } finally {
     echo 'Executado' ;
 }
