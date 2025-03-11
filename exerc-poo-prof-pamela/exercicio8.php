<?php

trait Logavel{
    public function logar(){
        echo "logando...<br>";
    }
}

class Usuario{
    use Logavel;
}

class Administrador {
    use Logavel;
}

$usuario = new Usuario();
$administrador = new Administrador();


$usuario -> logar();       
$administrador -> logar();

?>
