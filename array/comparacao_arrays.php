<div class="titulo">Comparações arrays</div>

<?php

$quebra = '<br>';

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2);
echo $quebra;

var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo $quebra;

var_dump($arr1 == $arr3);
echo $quebra;

var_dump($arr1 === $arr3);
echo $quebra;

var_dump($arr1 != $arr3);
echo $quebra;

var_dump($arr1 !== $arr3);
echo $quebra;

$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4);
echo $quebra;

var_dump($arr1 === $arr4);