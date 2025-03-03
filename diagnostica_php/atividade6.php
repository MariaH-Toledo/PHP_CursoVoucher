<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Vogais e Caracteres Especiais</title>
</head>
<body>

    <h2>Remover Vogais, Acentos e Caracteres Especiais</h2>
    <form method="POST">
        <label>Digite um texto:</label>
        <input type="text" name="texto" required>
        <button type="submit">Remover</button>
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    function removerVogaisEEspeciais($texto){
        $normalizado = iconv('UTF-8', 'ASCII//TRANSLIT', $texto);
        return preg_replace('/[aeiouAEIOUçÇ\W]/u', '', $normalizado);
    }

    $entrada = $_POST["texto"];
    $resultado = removerVogaisEEspeciais($entrada);

    echo "<h3>Resultado:</h3>";
    echo "<p><strong>Texto sem vogais e caracteres especiais:</strong> $resultado</p>";
}
?>
