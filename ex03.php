<?php

    function mascararCPF($cpf){
        $cpf = preg_replace("/\D/","*", $cpf); // garante que tenha 11 caracteres

        $cpfMascarado = substr_replace($cpf, "***.***.*", 0, 7);// substitui os caracteres por * 
        
        return $cpfMascarado;
    }

    $cpfUsuario = "140.118.645-85";

    $mascara = mascararCPF($cpfUsuario);


    echo $cpfUsuario . "<br>";
    echo $mascara;







?>