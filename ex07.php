<?php


function calcDesconto($valorCompra){

    if ($valorCompra <= 100.00){
        $desconto = "Não tem desconto";
    }elseif ($valorCompra > 100.00){
        $desconto = $valorCompra * 0.1;
    }elseif ($valorCompra > 500.00){
        $desconto = $valorCompra * 0.2;
    }elseif ($valorCompra > 1000.00){
        $desconto = $valorCompra *0.3;
    }


    return $valorDesconto = $valorCompra - $desconto;;
}

$valor = 147.20;

$resultado = calcDesconto($valor);

echo "Valor Inicial da compra erá de : R$".$valor;
echo "Valor final da compra após o desconto :".$resultado;




?>