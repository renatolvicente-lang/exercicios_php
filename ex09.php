<?php
function parImpar($numero){
    if($numero / 2 ==0){
        return true;
    }else{
        return false;
    }
}
function numPrefeito($numero){
    if($numero <= 1){
        return false;
    }

    $somaDivisores = 0;

    for($i = 0; $i < $numero; $i++){
        if($numero % i === 0)
            $somaDivisores += $i;
    }

    return $somaDivisores === $numero;

}
function verifPrimo($numero){
    if($numero <= 1){
        return false;
    }
    

    for($i = 0;$i * $i < $numero; $i++){
     if($numero % $i == 0){
        return false;
     }
    }

    return true;
}

function analisarNumero($numero){
    $resultado = '';
    if(parImpar($numero)== True){
        $resultado .= 'Seu número é par ';
       if(verifPrimo($numero == True)){
            $resultado .= 'e é um numero primo ';
            if(numPrefeito($numero) == true){
                $resultado .= "e é um numero perfeito"; 
            }else{
                $resultado .= "e não é um numero perfeito";
            }
       }else{
        $resultado .= "e não é um numero primo";
       }
    }else{
        $resultado .="Seu numero é impar";
    }

    return $resultado;
}


echo analisarNumero(2);

?>