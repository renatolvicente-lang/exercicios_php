<?php


function ordenarNomes($nomes){
    $partes = array_map('trim' ,explode(",", $nomes));//transfora o array em um vetor separando as palavras a partir da virgula e apagando os espaços
    sort($partes, SORT_LOCALE_STRING);//organiza em ordem alfabetica.
    
    return $partes;
}

$nomesUsuario = "Banana,Maçã,Pera";

$resultado = ordenarNomes($nomesUsuario);

echo implode(",",$resultado);
















?>