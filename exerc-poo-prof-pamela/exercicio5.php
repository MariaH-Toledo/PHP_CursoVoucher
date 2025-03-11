<?php

class Animal {
    public function som(){
        echo "O animal faz um som<br>";
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

class Zoo{
    public function barulho(Animal $animal){
        $animal -> som();
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

$zoo = new Zoo();

$zoo -> barulho($cachorro);
$zoo -> barulho($gato);

?>
