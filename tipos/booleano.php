<div class="titulo">Tipo Booleano</div>

<?php
$quebra = "<br>";

echo TRUE;

echo $quebra;
echo FALSE; 

echo $quebra;
echo var_dump(false);

echo $quebra;
echo var_dump(true);

echo $quebra;
echo var_dump(false);

echo $quebra;
echo is_bool('true');

echo $quebra;
echo is_bool('false');

echo $quebra;
var_dump((bool) 0);

echo $quebra;
var_dump((bool) 20);

echo $quebra;
var_dump((bool) 0.0);


echo $quebra;
var_dump(!!"false");


echo $quebra;
echo is_bool(!!"false");
