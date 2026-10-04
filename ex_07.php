<?php

function calcularDesconto($Compra)
{
    
    if($Compra > 1000){
        $desconto = 30;
    }
    elseif($Compra > 500){
        $desconto = 20;
    }
    elseif($Compra > 100){
        $desconto = 10;
    }
    else{
        $desconto = 0;
    }

    
    $valorDesconto = ($Compra * $desconto) / 100;

    $valorFinal = $Compra - $valorDesconto;

    echo "Valor: R$ " . ($Compra) . "<br>";
    echo "Desconto aplicado: " . $desconto . "%<br>";
    echo "Desconto: R$ " . ($valorDesconto) . "<br>";
    echo "Valor final: R$ " .($valorFinal) . "<br>";
}


calcularDesconto(2360.50);