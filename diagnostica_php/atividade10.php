<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nome e Idade</title>
</head>
<body>

    <h2>Digite seu Nome e Idade</h2>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        
        echo "<h3>Resultado:</h3>";
        echo "<p>Olá, $nome! Você tem $idade anos.</p>";
    }
    ?>

</body>
</html>
