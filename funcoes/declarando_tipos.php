<div class="titulo">Declarando Tipos</div>

<?php

function soma(int $primary, int $second){
    echo "<span> $primary + $second = </span>";
    return $primary + $second;
}

function soma2(int $primary, $second){
    echo "<span> $primary + $second = </span>";
    return $primary + $second;
}

function soma3($primary, float $second): int {
    echo "<span> $primary + $second = </span>";
    return $primary + $second;
}

function soma4($primary, float $second){
    echo "<span> $primary + $second = </span>";
    return $primary + $second;
}

echo soma(3.5, 3);
echo "<br>";

echo soma2(3, 5.5);
echo "<br>";

echo soma3(3, 6.5);
echo "<br>";

echo soma4(3, 4.5);
echo "<br>";



