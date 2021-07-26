<div class="titulo">Argumentos</div>

<?php
function mostrarMensagem(){
    return "Ola <br>";
}


$mensagem = mostrarMensagem();
echo $mensagem;


function mostrarNome($name){
    return "Bora la {$name}! <br>";
}

$Name = mostrarNome('Gustavo');
echo $Name;

function mostrarConta($primary, $second){
    return $primary * $second;
}

$Conta = mostrarConta(2, 7);
echo $Conta;

echo "<br>";
$value = 40;
echo $value;

function updateValue(&$primary, $newValue){
    $primary = $newValue;
}

echo "<br>";
updateValue($value, 10);
echo $value;
