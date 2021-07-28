<div class="titulo">Data 1</div>

<?php
echo time();


echo "<br>" . date('D, \d\e M \d\e Y');
echo "<br>" . strftime('%A,  %d de %b de %Y', time());
setlocale(LC_TIME, 'pt_BR');
echo "<br>" . strftime('%A,  %d de %b de %Y', time());

$proximoDia = time() + (24 * 60 * 60);
echo "<br>" . strftime('%A,  %d de %b de %Y', $proximoDia);

$proximoSemana = strtotime('+1 week ');
echo "<br>" . strftime('%A,  %d de %b de %Y', $proximoSemana);

$proximoMes = strtotime('+1 month');
echo "<br>" . strftime('%A,  %d de %b de %Y', $proximoMes);

$proximoAno = strtotime('+1 year');
echo "<br>" . strftime('%A,  %d de %b de %Y', $proximoAno);

$dataFixa = mktime(11, 00, 00, 7, 28, 1910);
echo '<br>' . strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);