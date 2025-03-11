<?php

class Animal{
    public function som() {
        echo "O animal faz um som.<br>";
    }
}

class Cachorro extends Animal{
    public function som(){
        echo "au au!<br>";
    }
}

class Gato extends Animal{
    public function som(){
        echo "miau!<br>";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

$cachorro -> som();
$gato -> som();

?>
