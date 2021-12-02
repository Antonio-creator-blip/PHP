<?php

    function calcolatrice ( $num1, $num2, $operatore)
    {
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
        }
    }

    $ris = calcolatrice(1,2,'/');
    
    echo($ris);


?>