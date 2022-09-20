<?php

$pares = filter_var($_GET['pares'], FILTER_VALIDATE_BOOLEAN);
$num = rand(1, 99);

echo "Numero: " . $num . "<br>";

for ($i = 1; $i <= $num; $i++) {
    if (($pares) && ($i % 2 == 0)) {
        echo $i . "<br>";
    }if ((!$pares) && ($i % 2 !== 0)){
        echo $i."<br>";
    }
}

?>