<?php

    function calcolatrice ( $num1, $num2, $operatore)
    {
        if($num1 == 0 || $num2==0 || $operatore == ''){
            return "Errore";
        }
        else{
            switch ($operatore){
                case "+":
                    $somma = $num1 + $num2;
                    return $somma;
                case "-":
                    $somma = $num1 - $num2;
                    return $somma;
                case "*":
                    $somma = $num1 * $num2;
                    return $somma;
                case "/":
                    $somma = $num1 / $num2;
                    return $somma;
                default:
                    echo "errore";
            }
        }
    }

    $ris = calcolatrice(1,2,'0');
    
    echo($ris);


?>
