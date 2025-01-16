<?php

// OPERADORES LÓGICOS
// PYTHON or NO PHP sinal "||"
// PYTHON and NO PHP sinal "&&"

$a = 10;
$b = 20;

$x = $a < $b;
$z = ($a > $b) || ($a <$b); //OR
$y = ($a > $b) && ($a <$b); //AND

echo "resultado da negação: <BR>";
$logado = false;

if(!$logado){
    echo "login efetuado com sucesso!!!";
}
else{
    echo "fazer o login é obrigatório!!!";
}
?>