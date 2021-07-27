<?php namespace Outro\Nome; ?>
<div class="titulo">Use as</div>

<?php
include('use_as_arquivo.php');

use Nome\Bem\Grande as bora;
echo bora\somar(4,4);

/*use function Nome\Bem\Grande\somar;
use function Nome\Bem\Grande\somar as somaReal;
echo somaReal(100, 212) . '<br>';
*/

/*
$b = new \Nome\Bem\Grande\Classe();
$b->func();
*/

/*
use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();
*/
