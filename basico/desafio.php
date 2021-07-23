<div class="titulo" center>Desafio PHP</div>

<?php
$conta = 1+1;
?>

<ul bold>
    <li center> 1+1 = <?= $conta ?> </li>
    <li center> 4+4 = <?= 2 * 4 ?> </li>
    <li center> 8+8 = <?= 2 ** 4 ?> </li>
</ul>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }

    [bold]{
        font-weight: bold;
    }
</style>