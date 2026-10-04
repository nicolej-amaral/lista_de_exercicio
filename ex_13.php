<?php

function criptografarMensagem($texto){

    $resultado = "";

    for($i = 0; $i < strlen($texto); $i++){

        $letra = $texto[$i];

        if($letra != " "){
            $resultado .= chr(ord($letra) + 5);
        }else{
            $resultado .= " ";
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto){

    $resultado = "";

    for($i = 0; $i < strlen($texto); $i++){

        $letra = $texto[$i];

        if($letra != " "){
            $resultado .= chr(ord($letra) - 5);
        }else{
            $resultado .= " ";
        }
    }

    return $resultado;
}

$mensagem = "A resposta da questão é letra A";

$criptografar = criptografarMensagem($mensagem);

echo "Mensagem: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $criptografar . "<br>";
echo "Mensagem descriptografada: " . descriptografarMensagem($criptografada);

?>