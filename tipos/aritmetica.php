<div class="titulo">Operações Aritmeticas</div>

<?php

$precedencia = '<p>Precedencia</p>';
$quebra = '<br>';

echo 1+1, $quebra;
var_dump(1+1.0);
echo $quebra;
echo 4-2, $quebra;
echo 4*2, $quebra;
echo intdiv(7, 4), $quebra; # retorna o numero inteiro na divisão
echo round(7 / 4), $quebra; # retorna o valor arredondado na divisão
echo 7 / 0, $quebra; # retorna o valor infinito
echo 5 ** 2, $quebra;
echo 7 % 4, $quebra;

echo $precedencia;

echo 2 + 3 * 4, $quebra;
echo (2 + 3) * 4, $quebra;
echo 2 + 3 * 4 ** 2, $quebra;
echo ((2 + 3) * 4) ** 2, $quebra;



