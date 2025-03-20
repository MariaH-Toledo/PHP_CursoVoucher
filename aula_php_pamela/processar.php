<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = '143';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("CONEXÃO FALHOU: " . $conn -> connect_error);
}

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
$idade = $_POST['idade'];
$peso = $_POST['peso'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 

$sql = "INSERT INTO usuarios (nome, cpf, data_nascimento, idade, peso, email, senha)
VALUES ('$nome', '$cpf', '$dataNascimento', '$idade', '$peso', '$email', '$senha')";

if ($conn->query($sql) === TRUE){
    echo "Cadastro salvo com sucesso!";
} else{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>