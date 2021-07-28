<div class="titulo">Lendo arquivo</div>

<?php

/*$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 2);
fclose($arquivo);
*/

$size = filesize('teste.txt');


$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo,$size);
fclose($arquivo);

/*$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo)
*/

/*$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);
*/

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nborinha");
fclose($arquivo);

