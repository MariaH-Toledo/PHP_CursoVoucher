<?php

class ContaBancaria{
    private $titular;
    private $saldo;

    public function __construct($titular, $saldo_inicial = 0){
        $this -> titular = $titular;
        $this -> saldo = $saldo_inicial;
    }

    public function depositar($valor){
        if ($valor > 0){
            $this -> saldo += $valor;
            echo "Depósito de R$ {$valor} realizado com sucesso<br>";
        } else{
            echo "Valor de depósito inválido<br>";
        }
    }

    public function sacar($valor){
        if ($valor > 0 && $valor <= $this -> saldo){
            $this -> saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso<br>";
        } else{
            echo "Saldo insuficiente ou valor inválido para saque<br>";
        }
    }

    public function saldo(){
        echo "Saldo atual de {$this -> titular}: R$ {$this -> saldo}<br>";
    }
}

$conta = new ContaBancaria("maria", 2000);


$conta -> saldo();
$conta -> depositar(500);
$conta -> saldo();
$conta -> sacar(300);
$conta -> saldo();
$conta -> sacar(2500);

?>
