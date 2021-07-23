<div class="titulo">While/Do While</div>

<?php

define('LIMITE', 5);
$contador = 0;

while( $contador < LIMITE){
    echo "$contador ";
    $contador++;
}

echo '<hr>';

do {
    echo "$contador ";
    $contador++;
} while( $contador < LIMITE);

echo '<hr>';

#copiado
$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= LIMITE) break;
}

