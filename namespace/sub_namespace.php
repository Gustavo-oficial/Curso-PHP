<?php namespace App; ?>
  <div class="titulo">Sub Namespace</div>


<?php
echo __NAMESPACE__ . '<br>';
const bora = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const bora = 321;

namespace App\Principal\SecuPrincinpal;
echo __NAMESPACE__ . '<br>';
const bora = 321123;

echo \App\bora;
