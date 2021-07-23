<div class="titulo">Constantes</div>

<?php

$quebra = '<br>';
$taxinha = 4;
$taxa = 8;


define('TAXA_NOVA', 6);
echo TAXA_NOVA;
echo $quebra;


define('TAXA_ATUAL', $taxinha);
echo TAXA_ATUAL;
echo $quebra;

define('TAXA_PASSADA', $taxinha + $taxa);
echo TAXA_PASSADA;
echo $quebra;

const BORA = 'bora la';
echo BORA;
echo $quebra;

echo "LINE: " . __LINE__;
echo $quebra;

echo "FILE: " . __FILE__;
echo $quebra;

echo "DIR: " . __DIR__;
echo $quebra;









