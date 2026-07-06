<?php

    function calcFormula($x, $y){
        if(($x + $y) == 0){
            return "Não é posivel divir por 0";
        }

        $result = ((pow($x,2)) + pow($y,2)) / ($x + $y);
        return $result;
    }

    echo "<h3> O resultado é: " . calcFormula(1,4);


?>