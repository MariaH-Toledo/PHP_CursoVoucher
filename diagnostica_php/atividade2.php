<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <form action="atividade2.php" method="POST">
        <label>Idade:</label>
        <input type="number" name = "idade">
        <input type="submit" value="Verficar">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = (int)$_POST['idade'];

    if($idade >= 18 and $idade < 60){
        echo "<br>";
        echo "Você é tem ". $idade . " anos, então é maior de idade";
    }
    if($idade < 18){
        echo "<br>";
        echo "Você é tem ". $idade . " anos, então é menor de idade";
    }
    if($idade >= 60){
        echo "<br>";
        echo "Você é tem ". $idade . " anos, então é idoso";
    }
}
?>