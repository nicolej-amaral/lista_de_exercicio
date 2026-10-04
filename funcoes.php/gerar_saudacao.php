<?php

function gerarSaudacao($hora){

    if($hora < 12){
        return "Bom dia!";
    }elseif($hora <= 18){
        return "Boa tarde!";
    }else{
        return "Boa noite!";
    }
}

$hora = 10;

echo "Hora: $hora" . "<br>";

echo gerarSaudacao($hora);