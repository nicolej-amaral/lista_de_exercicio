<?php

function ordenarNomes($nomes) {
    sort($nomes);
    return $nomes;  

    print_r($nomes);
}

echo "Nomes ordenados:" . "<br>";
$nomes = ["Nicole", "Sarah", "Maicon", "Luzia", "Cookie", "Noah" ];
$OrdemNomes = ordenarNomes($nomes);
print_r($OrdemNomes);