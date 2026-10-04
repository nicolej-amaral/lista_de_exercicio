<?php
function  analisarTexto($texto)
{
   
    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);
    $frases = substr_count($texto, '.');
    $vogais = preg_match_all('/[aeiou]/i', $texto);
    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto);

    return "Caracteres: $caracteres Palavras: $palavras Frases: $frases Vogais: $vogais Consoantes: $consoantes.";

}

    $texto = "Tudo lhe é permitido, mas nem tudo lhe convém";
    echo "Texto: " . $texto . "<br>";
    echo analisarTexto($texto);    