<div class="titulo">Desafio string</div>

<?php

$quebra = '<br>';


$desafio = "!AbcaBcabc";
echo 'DESAFIO: ', $desafio;
echo $quebra;

echo $quebra;
echo 'Posicao só abc: ', substr($desafio, 6, );

echo $quebra;
echo $quebra, 'Retornar 1: ', strpos($desafio, 'abc');

echo $quebra;
echo $quebra, 'Retornar 1: ', stripos($desafio, 'abc');

echo $quebra;
echo $quebra, 'Retornar 1: ', stripos(strtolower($desafio), strtolower('ABC'));


