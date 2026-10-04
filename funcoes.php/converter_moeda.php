<?php

function converterMoeda($valor, $conversao){
    return $valor / $conversao;
}

$valor = 150;
$cotacao = 5;

echo "Em reais: $valor" . "<br>";
echo "Dolar: $conversao" . "<br>";
echo "Valor em dolar:" . converterMoeda($valor, $conversao);