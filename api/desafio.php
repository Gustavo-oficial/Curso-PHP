<div class="titulo">Imagens</div>

<?php
@session_start();

$arquivos = $_SESSION ['arquivos'] ?? [];

$destinoArquivo = __DIR__ . '/../files/';
@$nomeArquivo = @$_FILES['arquivo']['name'];
$arquivo = $destinoArquivo . $nomeArquivo;
@$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
       <input name="arquivo" type="file">
       <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <?php if (strpos($arquivo, 'jpg') > 0): ?> 
            <li>
                <img src="\curso_php\files\<?= $arquivo ?>" alt="imagem" height="200">
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input, button{
        font-size: 1.8rem;
    }
</style>

