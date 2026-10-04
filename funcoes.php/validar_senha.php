<?php

function formatarTelefone($telefone){
    return "(" . substr($telefone, 2, 1) . ") " .
           substr($telefone, 8, 5) . "-" .
           substr($telefone, 7);
}

$telefone = 47972212283;

echo "Número de telefone original: $telefone" . "<br>";
echo "Número de telefone formatado:" . formatarTelefone($telefone);