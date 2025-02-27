<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área</title>
</head>
<body>
    <form action="atividade4.php" method="POST">
        <label>Comprimento:</label>
        <input type="number" name = "comprimento">
        <br>
        <label>Largura:</label>
        <input type="number" name = "largura">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php

function calcula_area($comprimento, $largura){
    $area = $comprimento * $largura;
    return $area;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $comprimento = (int)$_POST['comprimento'];
    $largura = (int)$_POST['largura'];

    $area = calcula_area($comprimento, $largura);

    echo "<br>";
    echo "Comprimento: " . $comprimento . "<br>";
    echo "Largura: " . $largura . "<br><br>";
    echo "Área: " . $area;
}


?>
