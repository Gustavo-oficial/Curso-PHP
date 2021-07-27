<div class="titulo">Polimorfismo</div>

<?php


class Carro{
    public $peso;
}

class Mercedes extends Carro{

}

class Ford extends Carro{
    
}

class Cegonha extends Carro{
    public $peso;
    function __construct($peso)
    {
        $this->peso = $peso;
    }

    function carregar(Ford $carga){
        $this->peso += $carga->peso;
    }
}


$car = new Carro;
$car->peso = 40;

$car2 = new Ford;
$car2->peso = 100;

$ceg = new Cegonha(200);
$ceg->carregar($car2);

echo $ceg->peso;