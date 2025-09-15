<?php
$servername =  'localhost';
$username = 'root';
$password = '';
$dbname = 'files';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Erro na Conexão: " . $conn -> connect_error);
} else{
    echo("Conectado com Sucesso!");
}
?>