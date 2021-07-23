<div class="titulo">Mapa</div>

<?php

$dados = array("Nome" => "Gustavo", "Idade" => "19", "Altura" => "1,75");

print_r($dados);

echo "<br>";

echo $dados["Idade"];

echo "<br>";

$dados[] = 300;

print_r($dados);

echo "<br>";


$dados['Peso'] = 300;

print_r($dados);

echo "<br>";
