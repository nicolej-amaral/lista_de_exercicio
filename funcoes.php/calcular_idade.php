<?php

function calcularIdade($nascimento){
    return date("Y") - $nascimento;
}

$nascimento = 2009;

echo "Ano de nascimento: $nascimento" . "<br>";

echo "Minha idade: " . calcularIdade($nascimento);