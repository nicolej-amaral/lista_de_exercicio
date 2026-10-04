<?php

function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

$peso = 60;
$altura = 1.65;

echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC = " . calcularIMC($peso, $altura);