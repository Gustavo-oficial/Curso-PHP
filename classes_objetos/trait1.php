<div class="titulo">Trait 1</div>

<?php

# use Teste as GlobalTeste;

trait validar{
    public $a = "Bora la";
    public function validacao($text){
        return isset($text)  && $text !== '';
    }
}

trait validar2{
    public function validacao2($text){
        return isset($text) && trim($text);
    }
}

class Teste{
    use validar, validar2;
}

$teste = new Teste();
var_dump($teste->validacao(' '));
echo '<br>';
var_dump($teste->validacao2(' '));

echo '<br>' . $teste->a;