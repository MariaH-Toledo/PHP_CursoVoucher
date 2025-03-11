<?php

interface Movimentavel{
    public function mover();
}

class Carro implements Movimentavel{
    public function mover(){
        echo "o carro está se movendo<br>";
    }
}

class Bicicleta implements Movimentavel{
    public function mover(){
        echo "a bicicleta está se movendo<br>";
    }
}

$carro = new Carro();
$bicicleta = new Bicicleta();


$carro -> mover();
$bicicleta -> mover();

?>
