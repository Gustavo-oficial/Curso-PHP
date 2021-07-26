<div class="titulo">Membros Estaticos</div>

<?php


  class Teste{
      public $nStatic = 'Não estatico';
      public static $static = 'Estatico <br>';

      public function mostrarTodos(){
          # classe não estatica
          echo "Classe: {$this->nStatic}";

          # classe estatica
          # echo "<br>Classe: {self::$static}";
          echo "<br>Classe: " . self::$static . "<br>";
      }


      public static function mostrarStatic(){
        echo "<br>Classe: " . self::$static;
      }
  }

$classe = new Teste();
$classe->mostrarTodos();


# acessa diretamente pela classe
# alterar diretamente a classe:  Teste::$static = 'novo txt';
echo Teste::$static;
Teste::mostrarStatic();
