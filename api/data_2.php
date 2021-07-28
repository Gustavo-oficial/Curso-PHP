<div class="titulo">Data 2</div>

<?php
$data1 = 'D, \d\e M \d\e Y';
$data2 = '%A,  %d de %B de %Y';
$dataHora ='%A, %d de %B de %Y - %H:%M:%S';

$date = new DateTime();

echo $date->format($data1);

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d/M/Y H:i:s');

echo setlocale(LC_ALL, 'pt_BR');
echo "<br>" . strftime($data2, $date->getTimestamp());

$proxima = new DateTime('+1 days');
echo "<br>" . strftime($data2, $proxima->getTimestamp());

$proxima->modify('+1 days');
echo "<br>" . strftime($data2, $proxima->getTimestamp());

$proxima->setDate(2002, 7, 20);
echo "<br>" . strftime($data2, $proxima->getTimestamp());



$passada = new DateTime('2001-7-21');
$futura = new DateTime('2010-7-21');
$igual = new DateTime('2010-7-21');

echo '<br>' . ($proxima > $passada ? 'Maior': 'Menor');
echo '<br>' . ($proxima > $futura ? 'Maior': 'Menor');
echo  '<br>' . ($futura == $igual ? 'Igual': 'Diferente');
