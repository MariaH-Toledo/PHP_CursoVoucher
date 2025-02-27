<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="atividade1.php" method="POST">
        <label>Primeiro Número:</label>
        <input type="number" name = "numero1">
        <br>
        <label>Segundo Número:</label>
        <input type="number" name = "numero2">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = (int)$_POST['numero1'];
    $numero2 = (int)$_POST['numero2'];

    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    echo "<br>";
    echo "Número 1: $numero1 (Tipo: " . gettype($numero1) . ")<br>";
    echo "Número 2: $numero2 (Tipo: " . gettype($numero2) . ")<br><br>";

    echo "Soma: $soma <br>";
    echo "Subtração: $subtracao <br>";
    echo "Multiplicação: $multiplicacao <br>";
    echo "Divisão: $divisao <br>";
}
?>
