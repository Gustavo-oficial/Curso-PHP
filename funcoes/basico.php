<div class="titulo">Funções</div>


<?php
  function boraLa(){
      echo "Bora la <br>";
  }

  $text = "Bora la <br>";

   function updateValue(){
       global $text;
       $text = "Rapaziada";
       echo $text;
   }

echo "Antes: $text";
echo "Depois: ";
updateValue();