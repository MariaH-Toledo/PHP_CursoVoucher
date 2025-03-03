<?php

$arquivo = "notas.txt";


if (file_exists($arquivo)){
    $conteudo = file_get_contents($arquivo);

    echo "<h3>Conteúdo do Arquivo:</h3>";
    echo "<pre>$conteudo</pre>";


    echo "<p><strong>Final do conteúdo</strong></p>";
} else {
    echo "<p><strong>O arquivo '$arquivo' não foi encontrado.</strong></p>";
}
?>
