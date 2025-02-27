<?php

for ($numero = 0; $numero < 100; $numero++){

    if ($numero % 3 == 0 && $numero % 5 == 0){
        echo "<br>";
        echo $numero . " AB";
    }

    elseif ($numero % 3 == 0){
        echo "<br>";
        echo $numero . " A";
    }

    elseif ($numero % 5 == 0){
        echo "<br>";
        echo $numero . " B";
    }

    else{
        echo "<br>";
        echo $numero;
    }
}
?>
