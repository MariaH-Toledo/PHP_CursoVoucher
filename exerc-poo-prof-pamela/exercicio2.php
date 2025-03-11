<?php

class Pessoa{
    private $nome;
    private $idade;
    private $genero;

    public function __construct($nome, $idade, $genero){
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> genero = $genero;
    }
    public function falar(){
        echo "oii, meu nome é {$this -> nome} e tenho {$this -> idade} anos";
    }
}

$pessoa = new Pessoa("maria", 16, "feminino");

$pessoa -> falar();



?>