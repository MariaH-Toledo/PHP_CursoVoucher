<?php
$matriz = [
    [22, 32, 24, 25],
    [32, 33 ,34, 35],
    [42, 43, 44, 45]
];

// echo $matriz[2][2];

// IMPRIMIR TODOS OS ITENS DA MATRIZ
foreach($matriz as $linha){
    foreach($linha as $item){
        echo $item . "<br>";
    }
}

// OU

echo "<br>";
for($i = 0; $i < count($matriz); $i++){
    echo "Posição: " . $i . " ";
    print_r($matriz[$i]);
    echo "<br>";
}

// OU

echo "<br>";
for($i = 0; $i < count($matriz); $i++){
    for($x = 0; $x < 4; $x++){
        echo $matriz[$i][$x] . "<br>";
    }
}
?>
