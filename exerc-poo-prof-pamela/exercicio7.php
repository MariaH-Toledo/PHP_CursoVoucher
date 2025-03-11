<?php

abstract class Forma{
    abstract public function area();
}

class Retangulo extends Forma{
    private $largura;
    private $altura;

    public function __construct($largura, $altura){
        $this -> largura = $largura;
        $this -> altura = $altura;
    }

    public function area(){
        return $this -> largura * $this -> altura;
    }
}

class Circulo extends Forma{
    private $raio;

    public function __construct($raio){
        $this -> raio = $raio;
    }

    public function area(){
        return 3.14 * pow($this -> raio, 2);
    }
}

$retangulo = new Retangulo(6, 12);
echo "área do Retângulo: " . $retangulo -> area() . "<br>";

$circulo = new Circulo(8);
echo "área do Círculo: " . $circulo -> area();

?>
