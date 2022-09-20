<?php

$primerNum = $_GET['numero1'];
$ultimoNum = $_GET['numero2'];

for ($i = $primerNum; $primerNum < $ultimoNum; $primerNum++, $i = $i + $primerNum){
    
}

echo "La suma es: " . $i;

?>