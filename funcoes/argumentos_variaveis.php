<div class="titulo">Argumentos Variaveis</div>

<?php


function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $number){
       $soma += $number;
    }
    return $soma;
}

echo somaCompleta(4, 5, 2, 5, 6);
echo "<br>";

echo "<br>";
$array = [1,3,5,9];
echo somaCompleta(...$array);
echo "<br>";

function timeCompleto($titular, ...$reservas){
    echo "Titulares: $titular <br>";
    if($reservas){
        foreach($reservas as $reserv){
            echo "Reservas: $reserv <br>";
        }
    }   
}

echo "<br>";
echo timeCompleto('Cassio', 'Vitinho', 'Roni');
echo "<br>";
echo timeCompleto('Giuliano', 'Jo', 'Cafu');
