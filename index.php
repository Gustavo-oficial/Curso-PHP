<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets\css\estilo.css">
        <title>Curso PHP</title>
    </head>
<body>
    <header class="cabecalho">
         <h1>Curso PHP</h1>
         <h2>Indices dos exercicios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
           <?php require_once('menu.php'); ?>
        </div>
    </main>
    <footer class="rodape">
        Copyright (c) <?= date('Y') ?> Company Name
    </footer>
</body>
</html>
     

     