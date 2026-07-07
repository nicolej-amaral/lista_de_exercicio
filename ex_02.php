<?php



function textoInvertido($textoNormal)
{


    $textoInvertido = strrev($textoNormal);
    return $textoInvertido;
    $numeroLetras = strlen($textoNormal);
    

}

    $textoNormal = "abelha";

    echo "Texto normal:  $textoNormal <br>";
    echo "Número de letras: " . strlen($textoNormal) . "<br>";

     echo " Resultado: " . textoInvertido($textoNormal);
    
     
    ?>