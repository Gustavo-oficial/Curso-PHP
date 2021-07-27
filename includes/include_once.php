<div class="titulo">Include_once</div>

<?php

include('include_once_arquivo.php');

echo $variavel . "<br>"; //valor da variavel da pasta raiz

$variavel = "ALTEREI"; //troca de valor da variavel da pasta raiz

# echo "Alterada: " . $variavel . "<br>";

include_once('include_once_arquivo.php');

echo $variavel;