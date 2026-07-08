<?php

Function gerarSenhas($quantidade){

    $caracteres = 'qwertyuiopasdfghjklçzxcvbnmQWERTYUIOPASDFGHJKLÇZXCVBNM0123456789!@#$%^&*()-_=+[]{}<>?/|';//variavel que armazena todos os caracteres
    $tamanho = strlen($caracteres);//armazena a quantidade de caracteres
    $senha = '';
    for ($i = 0; $i < $quantidade; $i++){//loop para criar a senha baseado no tamanho pedido
        $sortear = random_int(0, $tamanho -1); //sorteia um numero equivalente a posição aleatoria de algum caracter da variavel dos caracteres
        $senha .= $caracteres[$sortear];//concatena o valor baseado na posição sorteada anteriormente
    } 

    return $senha;
}

echo gerarSenhas(255);
?>