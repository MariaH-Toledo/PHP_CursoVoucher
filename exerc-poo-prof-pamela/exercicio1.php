<?php

class Carro{
    private $marca;
    private $modelo;
    private $ano_fabricacao;

    public function __construct($marca, $modelo, $ano_fabricacao){
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> ano_fabricacao = $ano_fabricacao;
    }
    public function exibir(){
        echo "Marca: " . $this -> marca . "<br>";
        echo "Modelo: " . $this -> modelo . "<br>";
        echo "Ano de Fabricação: " . $this -> ano_fabricacao . "<br>";
    }

}

$carro = new Carro("volkswagen", "fusca", 1959);

$carro -> exibir();
?>