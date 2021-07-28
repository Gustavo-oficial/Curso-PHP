<?php
session_start();

$email = @$_POST['email'];
$senha = @$_POST['senha'];

if (@$_POST['email']) {
    $usuarios = [
        [
            "nome" => "Gustavo",
            "email" => "gustavo@email.com",
            "senha" => "12345678",
        ],
        [
            "nome" => "Felix",
            "email" => "felix@email.com",
            "senha" => "87654321",
        ],
    ];

    foreach ($usuarios as $usuario) {
        $emailV = $email === $usuario['email'];
        $senhaV = $senha === $usuario['senha'];

        if ($emailV && $senhaV) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 30 * 60 * 24 * 30;
            setcookie('usuario', $usuario ['nome'], $exp);
            header('Location: index.php');
        }
    }

    if (@!$_SESSION['usuario']) {
        @$_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="assets\css\estilo.css">
        <link rel="stylesheet" href="assets\css\login.css">
        <title>Curso PHP</title>
    </head>
<body class="login">
    <header class="cabecalho">
         <h1>Curso PHP</h1>
         <h2>Seja Bem-Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
           <h3>Login</h3>
           <?php if (@$_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?=$erro?></p>
                    <?php endforeach?>
                </div>
            <?php endif?>
            <form action="#" method="post">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <div class="center">
                    <button>Entrar</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="rodape">
        Copyright (c) <?=date('Y')?> Company Name
    </footer>
</body>
</html>


