<div class="titulo">Laço For</div>

<?php

for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15; ){
    echo "$cont <br>";
    $cont++;
}

/*
$array = ['1', '2', '3', '4', '5', '6', '7'];

print_r($array);

echo "<hr>";

for($i = 0; $i <= count ($array); $i++){
    echo "{$array[$i]}";
}
*/

echo "<hr>";

$contagem = [ 1 => '1','2','3','4','5','6','7'];

print_r($contagem);

echo "<hr>";

for($i = 1; $i <= count($contagem); $i++) {
    echo "{$contagem[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
     ['b', 'c', 'd']
];

echo "<hr>";

for($i = 0; $i < count ($matrix); $i++) {
   for($j = 0; $j < count ($matrix[$i]); $j++){
       echo "{$matrix[$i][$j]}";
   }
       echo "<br>";
}