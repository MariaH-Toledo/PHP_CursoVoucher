<?php

class DivisionByZeroException extends Exception{
    public function __construct($message = "não é possível dividir por zero."){
        parent::__construct($message);
    }
}

class Calculadora {
    public function dividir($a, $b){
        if ($b == 0) {
            throw new DivisionByZeroException();
        }

        return $a / $b;
    }
}

?>
