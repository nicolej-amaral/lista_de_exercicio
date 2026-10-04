<?php

function validarSenha($senha){

    if(strlen($senha) >= 8){
        return "Sua senha é forte.";
    }else{
        return "Sua senha é fraca, você deve mudar.";
    }

}

$senha = nicolejAmaral19;

echo "Senha: $senha <br>";
echo validarSenha($senha);