<?php

Function gerarSenhas($quantidade){

    $caracteres = 'qwertyuiopasdfghjklçzxcvbnmQWERTYUIOPASDFGHJKLÇZXCVBNM0123456789!@#$%^&*()-_=+[]{}<>?/|';
    $tamanho = strlen($caracteres);

    for ($i = 0; $i < $quantidade; $i++){
        $sortear = random_int(0, tamanho, -1); 
        $senha .= $caracteres[$sortear];
    } 

    return $senha;
}

?>

echo gerarSenhas(12);