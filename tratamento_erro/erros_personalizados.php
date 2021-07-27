<div class="titulo">Erros Personalizados</div>


<?php
 class FaixaEtariaException extends Exception{
     public function __construct($mensage, $code = 0, $previous = null)
     {
         parent::__construct($mensage, $code, $previous);
     }
 }

 function calcularTempoAposentadoria($idade){
     if($idade < 18){
          throw new FaixaEtariaException('Falta alguns anos <br>');
     }

     if($idade > 70){
         throw new FaixaEtariaException('Deveria estar aposentado maluco <br>');
     }
         return 70 - $idade;
 }

 $idadesValidas = [10, 20, 60, 90];

 foreach($idadesValidas as $idade){
     try {
         $tempo = calcularTempoAposentadoria($idade);
        echo "Idade: {$idade}, {$tempo} <br>";
     } catch (FaixaEtariaException $e) {
        echo "Não foi possivel calcular {$idade} anos <br>";
        echo "Motivo: {$e->getMessage()}";
     } 
}