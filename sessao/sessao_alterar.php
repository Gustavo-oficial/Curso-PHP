<?php

session_start();
print_r($_SESSION);
?>

<?= $_SESSION['nome'] = 'mir'; ?>

<p> Nome : <?= $_SESSION['nome'] ?> <br> Email: <?= $_SESSION['email'] ?></p>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="\curso_php\sessao\limpar_sessao.php">Limpar sessão</a>
</p>
