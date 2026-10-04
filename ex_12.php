<?php

function analisarProdutos($produtos, $pesquisa){

    $Caro = $produtos[0];
    $Barato = $produtos[0];
    $soma = 0;
    $Busca = false;

    foreach($produtos as $produto){

       
        $soma += $produto[1];

     
        if($produto[1] > $maisCaro[1]){
            $Caro = $produto;
        }

        if($produto[1] < $maisBarato[1]){
            $Barato = $produto;
        }

        if($produto[0] == $pesquisa){
            $Busca = true;
        }
    }

    $media = $soma / count($produtos);

    return "O mais caro: " . $Caro[0] . " - R$ " . $Caro[1] . "<br>" .
           "O mais barato: " . $Barato[0] . " - R$ " . $Barato[1] . "<br>" .
           "Média de todos os preços: R$ " . $media . "<br>" .
           "Pesquisa: " . ($Busca ? "Produto encontrado!" : "Produto não encontrado.");
}


$produtos = [
    ["Lã", 13],
    ["Agulha", 15],
    ["Enchimento", 22],
    ["Tesoura", 5]
];


$pesquisa = "Agulha";


echo analisarProdutos($produtos, $pesquisa);