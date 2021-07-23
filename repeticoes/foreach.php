<div class="titulo">Foreach</div>

<?php

$contagem = [ 100 => '1','2','3','4','5','6','7'];

foreach($contagem as $resultado){
    echo "$resultado <br>";
}

echo "<hr>";

foreach($contagem as $indice => $resultado){
    echo "$indice => $resultado <br>";
}

# copiado
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    foreach($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);