<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatar Data</title>
</head>
<body>

    <h2>Digite uma Data</h2>
    <form method="POST">
        <label>Escolha a data:</label>
        <input type="date" id="data" name="data" required>
        <button type="submit">Formatar</button>
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $diasSemana = ["domingo", "segunda-feira", "terça-feira", "quarta-feira", 
                   "quinta-feira", "sexta-feira", "sábado"];
    
    $meses = [1 => "janeiro", "fevereiro", "março", "abril", "maio", "junho",
              "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];

    $dataEntrada = $_POST["data"];

    $timestamp = strtotime($dataEntrada);

    $diaSemana = $diasSemana[date("w", $timestamp)];
    $dia = date("d", $timestamp);
    $mes = $meses[date("n", $timestamp)];
    $ano = date("Y", $timestamp);

    $dataFormatada = "$diaSemana, $dia de $mes de $ano";

    echo "<br>";
    echo "<h3>Data Formatada:</h3>";
    echo "<p><strong>$dataFormatada</strong></p>";
}
?>
