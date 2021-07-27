<?php
class Pessoa {
    public $nome;
    public $nacionalidade;

    function __construct($nome, $nacionalidade) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
    }

    public function apresentar() {
        return "<br> Nome: {$this->nome}; <br> Nacionalidade: {$this->nacionalidade};<br>";
    }
}