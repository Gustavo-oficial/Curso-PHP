<div class="titulo" center>Desafio Equação</div>

<?php

$numerador1 = ((6 * (3 + 2)) **2 ) / (3 * 2);
$numerador2 = ((1 - 5) * ( 2 - 7) / 2) ** 2 ;
$conta1 = "(" . $numerador1 . "-" . $numerador2 . ")";
$conta2 = $numerador1 - $numerador2;
$resultado = ($conta2 ** 3) / (10 ** 3);


echo "Resultado: " . $resultado;



