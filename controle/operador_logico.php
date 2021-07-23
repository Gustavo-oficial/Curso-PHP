<div class="titulo">Operadores Lógicos</div>

<?php
$quebra = "<br>";
 # a cada ! add ele retorna o valor reverso, como abaixo:
 # && = AND
 # || = OR
 # xor = Exclusivo
 #
 #

var_dump(true);
 echo $quebra;

 var_dump(false);
 echo $quebra;

 var_dump(!true);
 echo $quebra;


echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}
