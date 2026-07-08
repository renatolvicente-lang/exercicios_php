<?php

function analisarTexto($texto){// função que analisa os textos

    $quantCaracteres = mb_strlen($texto);//Conta e armazena a quantidade de caracteres na variavel
    $quantVogal = preg_match_all('/[aeiouàáâãèéêíòóôõùúüAEIOUÀÁÂÃÈÉÊÍÒÓÔÕÙÚÜ]/', $texto);//Conta e armazena a quantidade de caracteres equivalente aos digitados na função em uma variavel
    $quantConsoantes = preg_match_all('/bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZàáâãèéêíòóôõùúüÀÁÂÃÈÉÊÍÒÓÔÕÙÚÜ]/', $texto);//Conta e armazena a quantidade de caracteres equivalente aos digitados na função em uma variavel
    $quantPalavras = str_word_count($texto);//conta e armazena a quantidade de palavras e armazena na variavel

    return [//retorna os ponteiros abaixo
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
echo $resultado["consoante"] ." = Quantidade de consoantes" ."<br>";
echo $resultado["palavras"] ." = Quantidade de palavras" ."<br>";





?>