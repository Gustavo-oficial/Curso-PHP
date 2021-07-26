<div class="titulo">Map e Filter</div>

<?php

$notas = [5.1, 6.1, 7.7];
$notasArredondadas = [];

    foreach($notas as $nota){ $notasArredondadas[] = round($nota);}

print_r($notasArredondadas);

@$notasArredondadas2 = array_map(round, $notas);

echo "<br>";
print_r($notasArredondadas2);


function aprovado($nota){
    return $nota >= 7;
}

echo "<br>";
@$aprovados = array_filter($notas, aprovado);
print_r($aprovados);


 function pontoExtra($nota){
     $ajusteNota = round($nota) + 1;
     return $ajusteNota > 10 ? 10 : $ajusteNota;
 }

 @$notaAjustada = array_map(pontoExtra, $notas);

echo "<br>";
print_r($notaAjustada);


