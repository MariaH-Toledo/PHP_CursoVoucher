<?php

require_once 'Calculadora.php';

try{
    $calculadora = new Calculadora();

    $resultado = $calculadora -> dividir(10, 0);

    echo "Resultado: " . $resultado;
} catch(DivisionByZeroException $e){
    echo "Erro: " . $e -> getMessage();
}

?>