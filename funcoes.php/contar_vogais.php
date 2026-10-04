<?php
function  analisarTexto($texto)
{
    
    $vogais = preg_match_all('/[aeiou]/i', $texto);

    return "Vogais: $vogais .";

}

$texto = "Não vão pegar o meu teleone, pegaram o meu telefone.";

echo "Texto: $texto <br>";
echo analisarTexto($texto);