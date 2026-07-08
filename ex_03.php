<?php

function  mascararCpf()
{
    $cpf = "720.957.137-59";
    $mascararCpf = substr($cpf, 0, 0) . "***.***.*" . substr($cpf, -5);
    return $mascararCpf;
}

echo "CPF original: 720.957.137-59 <br>";

echo "CPF mascarado: " . mascararCpf();