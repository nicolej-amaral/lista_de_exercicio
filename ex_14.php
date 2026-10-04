<?php

function estatisticasNumericas($numeros){

    $soma = 0;
    $maior = $numeros[0];
    $menor = $numeros[0];
    $par = 0;
    $impar = 0;

    foreach($numeros as $numero){

        $soma += $numero;

        if($numero > $maior){
            $maior = $numero;
        }

        if($numero < $menor){
            $menor = $numero;
        }

        if($numero % 2 == 0){
            $pares++;
        }else{
            $impares++;
        }
    }

    $media = $soma / count($numeros);

    
    sort($numeros);

    $quantidade = count($numeros);

    if($quantidade % 2 == 0){
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    }else{
        $mediana = $numeros[floor($quantidade / 2)];
    }

    return "Soma: $soma<br>" .
           "Média: $media<br>" .
           "Maior valor: $maior<br>" .
           "Menor valor: $menor<br>" .
           "Mediana: $mediana<br>" .
           "Quantidade de números pares: $par<br>" .
           "Quantidade de números ímpares: $impar";
}

$numeros = [0, 3, 9, 12, 15, 18, 21];


echo estatisticasNumericas($numeros);