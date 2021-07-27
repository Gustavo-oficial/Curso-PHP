<?php
require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $nacionalidade, $login) {
        parent::__construct($nome, $nacionalidade);
        $this->login = $login;
    }

    public function apresentar() {
        $login = "Login: {$this->login};";
        return $login . parent::apresentar();
    }
}