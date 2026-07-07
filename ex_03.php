<?php

function cpf($cpfNormal)
{


   $cpf = mascararCpf($cpfNormal);
    return $cpf;

}

    $cpfNormal = "12312312323";

    echo "CPF normal:  $cpfNormal <br>";
    echo "CPF mascarado: " . mascararCpf($cpfNormal) . "<br>";

     
    
    ?>