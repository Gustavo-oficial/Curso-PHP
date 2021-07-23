<div class="titulo">Desafio For</div

<?php
 $hashtag = '';
 for($conta = 0; $conta <= 5; $conta++){
     $hashtag .= '#';
    echo "$hashtag <br>";
 }

 echo '<hr>';

 #copiado
 for(
    $impressao2 = '#';
    $impressao2 !== '######'; 
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}
 