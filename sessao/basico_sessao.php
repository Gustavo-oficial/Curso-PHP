<div class="titulo">Sessão 1</div>

<?php

session_start();

@print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gustavo';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'gustavo@email.com';
}

print_r($_SESSION);

?>

<p> <a href="\curso_php\sessao\sessao_alterar.php">Alterar sessão</a></p>



