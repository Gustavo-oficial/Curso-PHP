<div class="titulo">Include Função</div>

<?php

function carregar(){
    include('include_arquivo.php');

    echo "<br>" . $bora;

    echo "<br>" . somar(10,3);
}

carregar();