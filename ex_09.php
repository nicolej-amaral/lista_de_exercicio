<?php

function analisarNumero($numero) {
 

if ($numero % 2 == 0) {
        $ParImpar = "Par";
    } else {
        $ParImpar = "Ímpar";
    }

    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = "É um número Perfeito";
    } else {
        $perfeito = "Não é um número perfeito";
    }

    return "Número: $numero<br>" .
           "Par ou ímpar: $ParImpar<br>" .
           "Primo: " . ($primo ? "Sim" : "Não") . "<br>" .
           "Perfeito: $perfeito";
}

$numero = 99

echo "O numero é:  $numero <br>";

echo analisarNumero($numero);