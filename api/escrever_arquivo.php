<div class="titulo">Escrevendo arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$seg = "Bora la\n";
fwrite($arquivo, $seg);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo BORA LA\n");
fclose($arquivo);


/*$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Novo BORA LA\n");
fwrite($arquivo, "adicionando bora la\n");
fclose($arquivo);
*/

# $arquivo = fopen('teste.txt', 'x');