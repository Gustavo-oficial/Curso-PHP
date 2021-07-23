<div class="titulo">Break/Continue</div>

<?php


$numero = 15;

for(;;){
    echo " $numero <br>";
    $numero++;
    if( $numero > 20){
        break;
    }
}

echo "<hr>";

for(;;){
    $numero++;
    if( $numero % 2 === 1) continue;
    echo "$numero <br>";
    if($numero >= 40){
        break;
    }
}

# copiado

foreach(array(1,2,3,4,5,6) as $valor) {
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor <br>";
}

echo "Fim!";