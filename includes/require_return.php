<div class="titulo">Include & Return</div>

<?php

# acessa os valores de outro arquivo, que ja estão com o retorno na raiz
$value = require('return_usado.php');
echo $retorna . "<br>";

# pasta acessada com __DIR__ e funcionando com REQUIRE E INCLUDE
$value2 = include(__DIR__ . '/return.php');
echo $declarada . "<br>";
