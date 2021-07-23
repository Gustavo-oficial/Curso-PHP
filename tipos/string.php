<div class="titulo">String</div>

<?php

$quebra = '<br>';
$concatenar = 'Concatenação';

echo 'String';
echo $quebra;
var_dump('String dump');

echo $quebra;
echo $quebra;
echo $concatenar;
echo $quebra;

echo "Bora" . ' la';
echo $quebra, "bora", ' la rapaziada';
echo $quebra, 'Bora ' . 123;
echo $quebra,$quebra, "Funções";

echo $quebra, strtoupper('bora');
echo $quebra, strtolower('BORA');
echo $quebra, ucfirst('bora');
echo $quebra, ucwords('bora la');
echo $quebra, strlen('Letras');
echo $quebra, mb_strlen('Também', "utf-8");
echo $quebra, substr('Bora la rapaziada', 4, 3); # seleciona uma letra para ser listado
echo $quebra, str_replace('Letras', 'la', 'Bora Letras'); # troca as letras desejadas


