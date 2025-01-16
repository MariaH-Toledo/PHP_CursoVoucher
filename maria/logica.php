<?php
$quant = 3550;
$conv = $quant / 6.1;

if ($conv < 1000) {
    echo $conv . "<br>";
    echo "to lascado";
} else {
    echo $conv . "<br>";
    echo "ta tranquilo, ta favorável";
}
?>