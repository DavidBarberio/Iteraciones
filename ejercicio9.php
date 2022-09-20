<?php

$numero = $_GET['numero'];

for ($i = 2; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        return 0;
    }
    return 1;
    
    echo "El numero " . $numero . "es primo";
}

?>