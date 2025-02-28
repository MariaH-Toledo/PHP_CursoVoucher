<?php
// Inicializa o array com os dois primeiros números da sequência
$fibonacci = [0, 1];

// Gera os próximos 8 números da sequência
for ($i = 2; $i < 10; $i++){
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

// Exibe os números na tela
echo implode(", ", $fibonacci);
?>
