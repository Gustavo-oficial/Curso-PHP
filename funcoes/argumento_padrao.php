<div class="titulo">Argumento Padrão</div>

<?php
function timesB($nome = 'Cruzeiro', $serie = "B"){
    echo "Time: $nome <br>";
    echo "Serie: $serie <br>";
}

echo timesB();
echo "<br>";

 function timesA($nome, $colocacao = "12"){
    echo "Time: $nome <br>";
    echo "Colocacao: $colocacao <br>";
}

echo timesA('Corinthians');