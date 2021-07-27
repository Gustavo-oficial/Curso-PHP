<div class="titulo">Gerenciando sessao</div>

<?php
# session_id('f10i69cph9bn5emgm3t63u3kc6');
session_start();

echo session_id();


$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;


if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 20){
    session_destroy();
}

echo '<br>' . $contador;