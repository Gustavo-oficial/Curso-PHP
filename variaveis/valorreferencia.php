<div class="titulo">Valor VS Referencia</div>

<?php

# Atribuição a valor
$variavel = "Hello Word";
echo $variavel;

$quebra = "<br>";
echo $quebra;
$variavelValor = $variavel;
echo "$variavelValor" . " $variavel";

echo $quebra;
$variavelValor = "Bora la";
echo $quebra;
echo "$variavelValor" . " $variavel";

#Referencia
$variavelReferencia = &$variavel;
$variavelReferencia = 'BORA LA ';

echo "<br>$variavel $variavelReferencia";


