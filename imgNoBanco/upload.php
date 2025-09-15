<?php
include 'connect.php';

$target_dir = "upload/";

if(!is_dir($target_dir)){
    mkdir($target_dir, 0755, true);
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imagemFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$target_file = $target_dir.md5(uniqid()) . "." . $imagemFileType;

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
    if($check !== false){
        echo "Arquivo é uma imagem - " . $check["mime"] . ".";
        $uploadOK = 1;
    } else{
        echo "Arquivo não é uma imagem.";
        $uploadOK = 0;
    }

    if(file_exists($target_file)){
        echo "Desculpe, caminho já existe.";
        $uploadOK = 0;
    }
    
    if($_FILES["fileToUpload"]["size"] > 5000000
    ){
        echo "Seu arquivo é muito grande.";
        $uploadOK = 0;
    }
    
    if($imagemFileType != "jpg" && $imagemFileType != "png" && $imagemFileType != "jpeg" && $imagemFileType != "gif"){
        echo "Desculpe, apenas arquivos JPG, JPEG, PNG & GIF são permitidos.";
        $uploadOK = 0;
    }
    
    if($uploadOK == 0){
        echo "Desculpe, seu arquivo não pôde ser submetido.";
    } else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi enviado.";
            $query_insert = "INSERT INTO path VALUES (null, './{$target_file}');";
            $result_insert = mysqli_query($conn, $query_insert);
        }
    } 
} else{
    echo "Desculpe, ocorreu um erro ao submeter o arquivo.";
}
?>