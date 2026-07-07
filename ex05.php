<?php

function analisarTexto($texto){

    $quantCaracteres = mb_strlen($texto);
    $quantVogal = preg_match_all('/[aeiouàáâãèéêíòóôõùúüAEIOUÀÁÂÃÈÉÊÍÒÓÔÕÙÚÜ]/', $texto);
    $quantConsoantes = preg_match_all('/bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZàáâãèéêíòóôõùúüÀÁÂÃÈÉÊÍÒÓÔÕÙÚÜ]/', $texto);
    $quantPalavras = str_word_count($texto);

    return [
        "caracteres" => $quantCaracteres,
        "vogais" => $quantVogal,
        "consoante" => $quantConsoantes,
        "palavras" => $quantPalavras
    ];
}

$textoUsuario = "Olá, Mundo!";
$resultado = analisarTexto($textoUsuario);

echo $textoUsuario . " = Seu texto"."<br>";
echo $resultado["caracteres"] ." = Quantidade de caracteres" ."<br>";
echo $resultado["vogais"] ." = Quantidade de vogais" ."<br>";
echo $resultado["consoantes"] ." = Quantidade de consoantes" ."<br>";
echo $resultado["palavras"] ." = Quantidade de palavras" ."<br>";





?>