<?php

$letra = "o";
$lineas = 10;

// Dibuja el total de lineas
for ($i = 1; $i <= $lineas; $i++) {
    
    // Dibuja una linea
    for ($j = 0; $j < $i; $j++) {
        echo $letra;
    }
    echo "<br>";
}
?>