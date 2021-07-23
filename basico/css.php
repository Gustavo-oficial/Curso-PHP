<div center class="titulo">Teste Css</div>

<h1 center>
<?php
echo 'Teste'
?>
</h1>

<?= "<div center>Bora la</div>" ?>

<br>

<div center><button><?= "Entrar" ?></button></div>

<style>
    button {
        background-color: #000;
        font-weight: bold;
        color: #fff;
        padding: 5px <?= 2 * 10 ?>px;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }


</style>

