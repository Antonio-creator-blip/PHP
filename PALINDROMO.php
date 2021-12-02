<?php
/*  //PRIMO METODO
    function palindromo($str){
        $len = strlen($str);
        $s = "";

        for($i=0;$i<=$len;$i++){
            $s .= $str[$len-$i] ;
        }
        if($str == $s){
            echo " palindromo";
        }
        else{
            echo " non è palindromo";
        }
    }

    palindromo("annan");*/

    // SECONDO METODO
    function palindromo ($str){
        $len = strlen($str) -1;
        for($i=0;$i<=$len;$i++){
            if($str[$i] != $str[$len-$i]){
                return "Non è palindromo";
            }
        }
        return "è palindromo";
    }
    echo palindromo("2050");
?>