<div class="titulo">Desafio</div>

<?php
require_once('usuario.php');

$user = new Usuario('Gustavo', 'Brasileiro', 'gusta_felix');
echo $user->apresentar();