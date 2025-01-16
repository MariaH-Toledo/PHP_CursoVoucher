<?php
$dados_banco = [
    [
        "id" => 1,
        "nome" => "thiago",
        "idade" => 32,
        "fone" => "67 99999-9999",
        "cidade" => "CG"
    ],
    [
        "id" => 2,
        "nome" => "maria",
        "idade" => 16,
        "fone" => "67 99999-5555",
        "cidade" => "CG"
    ],
    [
        "id" => 3,
        "nome" => "fernanda",
        "idade" => 17,
        "fone" => "67 99999-4444",
        "cidade" => "CG"
    ],
    [
        "id" => 4,
        "nome" => "anna laurah",
        "idade" => 16,
        "fone" => "67 99999-3333",
        "cidade" => "CG"
    ]

];

//IMPRIMIR O NOME DA FERNANDA
echo $dados_banco[2]['nome'];
echo "<br>";

// IMPRIMIR TODOS OS DADOS DA LISTA
echo "<br>";
foreach($dados_banco as $linha){
    foreach($linha as $item){
        echo $item . " ";
    };
    echo "<br>";
};

// OU
echo "<br>";
for($i = 0; $i < sizeof($dados_banco); $i++){
    echo "ID: " . $dados_banco[$i]["id"] . "," . 
    " NOME: " . $dados_banco[$i]["nome"] . "," . 
    " IDADE: " . $dados_banco[$i]["idade"] . "," ."<br>";
};
?>