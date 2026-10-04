<?php  

 function calcularMedia(array $notas) {

    $maiorNota = max($notas);
    $menorNota = min($notas);

    
    $somaNotas = array_sum($notas);
    $quantidadeNotas = count($notas);   
    $media = $somaNotas / $quantidadeNotas;
    

   
    if ($media >= 6) {
        $situacaoFinal = "Aprovado";
    } else if ($media >= 5) {
        $situacaoFinal = "Recuperação";
    } else {
        $situacaoFinal = "Reprovado";
    }

    return [
        'maiorNota' => $maiorNota,
        'menorNota' => $menorNota,
        'media' => $media,
        'situacaoFinal' => $situacaoFinal
    ];
 }

echo "Resultado do cálculo da média:" . "<br>";
    $notas = [10, 8, 9, 7, 4];  
    $resultado = calcularMedia($notas);
                echo "Maior nota: " . $resultado['maiorNota'] . "<br>";
                echo "Menor nota: " . $resultado['menorNota'] . "<br>";
                echo "Média: " . $resultado['media'] . "<br>";
                echo "Situação Final: " . $resultado['situacaoFinal'] . "<br>";