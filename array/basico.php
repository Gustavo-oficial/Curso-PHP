<div class="titulo">Array</div>

<?php

$quebra = '<br>';
$list = array(10, 1.1, 'Bora la');
$mensagem = 'Bora la';

echo $list[0], $quebra;
echo $list[1], $quebra;
echo $list[2], $quebra;

echo $quebra;
var_dump($mensagem[2]);
echo $quebra;

echo $mensagem[0], $quebra;
echo mb_substr($mensagem, 1, 1), $quebra;
echo mb_substr($mensagem, 2, 1), $quebra;
echo mb_substr($mensagem, 3, 1), $quebra;
echo mb_substr($mensagem, 4, 1), $quebra;