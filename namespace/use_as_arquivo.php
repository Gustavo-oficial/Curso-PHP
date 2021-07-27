<?php
namespace Nome\Bem\Grande;

# echo __NAMESPACE__ . '<br>';

const numero = 123;

function somar($a, $b)
{
    return $a + $b;
}

class Classe
{
    public $var;

    public function func()
    {
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}
