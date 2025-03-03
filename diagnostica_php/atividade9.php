<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de E-mail</title>
</head>
<body>

    <h2>Validação de E-mail</h2>
    <form method="POST">
        <label>Digite seu e-mail:</label>
        <input type="text" name="email" required>
        <button type="submit">Validar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function validarEmail($email) {
            if (strpos($email, "@") !== false && strpos($email, ".") !== false) {
                return "O e-mail '$email' é válido.";
            } else {
                return "O e-mail '$email' é inválido.";
            }
        }

        $emailUsuario = $_POST["email"];
        echo "<h3>Resultado:</h3>";
        echo "<p><strong>" . validarEmail($emailUsuario) . "</strong></p>";
    }
    ?>

</body>
</html>
