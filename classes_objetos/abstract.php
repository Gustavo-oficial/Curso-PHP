<div class="titulo">Abstrata</div>

<?php


abstract class Abstrata{
    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class Abstrata2 extends Abstrata{
    public function metodo1(){
        echo "Hello";
    }
    abstract public function metodo3();
}

class Normal extends Abstrata2{
    public function metodo1() {
        echo "Metodo 1 <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro) {
        echo "Metodo, mais $parametro<br>";
    }

    public function metodo3() {
        echo "Executando método 3<br>";
        $this->metodo2('borinha');
    }
}

$bora = new Normal();
$bora->metodo1();

echo "<br>";

$bora->metodo3('borinha');


echo "<br>";

# $bora->metodo2('borinha');
