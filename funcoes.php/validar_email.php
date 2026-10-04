<?php

function validarEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

$email = "nicolejamaral19@gmail.com";

echo "Email: $email" . "<br>";
echo "O email: " . (validarEmail($email) ? "É válido" : "Não é válido");