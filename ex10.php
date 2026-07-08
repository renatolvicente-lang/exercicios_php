<?php

function calcularMedia($notas){ 
    foreach($notas  as $nota){//percorre o array e soma todos os valores
        $soma += $nota;
    }
    $media = $soma /3;

    $maior = max($notas);//pega o maior valor do array
    $menor = min($notas);// pega o menor valor do array

    if($media >= 7){
      $resultadoFinal = 'aprovado';
    }elseif($media < 7 && $media > 5){
      $resultadoFinal = 'recuperação';
    }else{
        $resultadoFinal = "reprovado";
    }

    return [
        "media" => $media,
        "maior"=> $maior,
        "menor"=> $menor,
        "resultado"=> $resultadoFinal
    ];

}
$notas = [5.5, 7.5, 10];
$resultado = calcularMedia($notas);
echo "A sua média foi de " . $resultado["media"] . "<br>";
echo "A sua maior nota foi de " . $resultado["maior"] . "<br>";
echo "A sua menor nota foi de " . $resultado["menor"] . "<br>";
echo "Sua situação final e de " . $resultado["resultado"] . "<br>";

?>