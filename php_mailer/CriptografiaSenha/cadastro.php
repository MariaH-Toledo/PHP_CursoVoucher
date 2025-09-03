<?php
include 'conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $conn -> real_escape_string(string: $_POST['nome']);
    $usuario = $conn -> real_escape_string(string: $_POST['usuario']);
    $senha = $conn -> real_escape_string(string: $_POST['senha']);

    $senhaHash = password_hash(password: $senha, algo: PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senhaHash')";

    if($conn -> query(query: $sql)){
        echo "Usuário Cadastrado com Sucesso!";
    } else{
        echo "Erro: " . $conn -> error;
    }

    $conn -> close();
}
?>