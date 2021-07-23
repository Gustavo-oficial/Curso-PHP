<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    [
     'Nome' => 'Gustavo',
     'Idade' => '19', 
     'Altura' => '1,75'
    ],
    [
     'Nome' => 'A',
     'Idade' => '100', 
     'Altura' => '1,00'
    ],
    ];


print_r($dados);
echo '<br>';

print_r($dados[1]);
echo '<br>';


$dados[] = [
    'Nome' => 'B', 
     'Idade' => '99', 
     'Altura' => '2,00'
];

$dados[2] ['sei la'] = 'bora la';
echo '<br>';
print_r($dados[2]);
echo '<br>';

print_r($dados);
echo '<br>';

