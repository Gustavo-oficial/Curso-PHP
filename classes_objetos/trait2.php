<div class="titulo">Trait 2</div>

<?php
trait validar{
    public $a = "Bora la";
    public function validacao($text){
        return isset($text)  && $text !== '';
    }
}

trait validar2{
    public function validacao($text){
        return isset($text) && trim($text);
    }
}

class Teste{
    use validar, validar2{
        # acessa uma function com o mesmo nome especifica
        validar2::validacao insteadof validar;
        # validar::validacao insteadof validar2;

        # muda o nome da function
        validar::validacao as validarNovo;
    }
}

$teste = new Teste();
var_dump($teste->validacao(' '));
echo "<br>";
# var_dump($teste->validarNovo(' '));