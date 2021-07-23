<div class="titulo">Desafio PI</div>

<?php
echo pi() . "<br>";
$pi = 3.14;

if($pi <= pi()){
    echo 'Iguais! <br>';
} else {
    echo "Diferentes";
}


// Operador Relacional
$piErrado = 2.8;

// Resposta
#echo '<br>' . ($pi - pi());
#echo '<br>' . ($pi - $piErrado);

/*if($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
}*/

if($pi - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!!';
}
  