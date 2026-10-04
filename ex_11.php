<?php  

 function formatarTexto( string $texto): array {

    return[
        'maiusculos' => mb_strtoupper($texto, 'UTF-8'),
        'minusculos' => mb_strtolower($texto, 'UTF-8'),
        'primeiraLetra' => mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8'),
        'quantidadeCaracteres' => mb_strlen($texto, 'UTF-8')
    ];

 }

 $texto = "Se eu pudesse voltar ao passado, voltaria mais ou menos em 1500.";
 $resultados = formatarTexto($texto);

 echo "Letras maiúsculas: " . $resultados['maiusculos'] . "<br>";
 echo "Letras minúsculas: " . $resultados['minusculos'] . "<br>";    
 echo "Primeira letra maiúscula: " . $resultados['primeiraLetra'] . "<br>";
 echo "Quantidade de caracteres: " . $resultados['quantidadeCaracteres'] . "<br>";