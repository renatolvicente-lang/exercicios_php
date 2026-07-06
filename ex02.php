<?php

function invertTexto($texto){
    $caracteres = preg_split('//u', $texto, -1 ,PREG_SPLIT_NO_EMPTY); // pega o array e separa os caracteres e armazena em um array
    $caracteresInvert = array_reverse($caracteres);//inverte a posição do array com os caracteres
    $textInvertido = implode('', $caracteresInvert);//concatenei os caracteres para formar a palavra/frase
    $quantCaracteres = mb_strlen($texto);//contei a quantidade de caracteres

    return [
        "invertido" => $textInvertido,//nomeia o valor que será exibido
        "quantidade"=> $quantCaracteres//nomeia o valor que será exibido
    ];
}

$textoUsuario = "socorram me subi no onibus em marrocos";// texto que será invertido

$resultado = invertTexto($textoUsuario);//função que inverte o texto

echo $textoUsuario . "<br>";// exibe o texto normal
echo $resultado["invertido"] . "<br>";//exibe o texto invertido
echo $resultado["quantidade"] . "<br>";//exibe a quantidade de caracteres

?>