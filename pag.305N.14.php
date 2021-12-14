<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_POST)
    {
        $stripped = str_replace(' ', '', $_POST["stringa"]);
        

        function countLettere (){
            $countVocali=0;
            
            $vocali = ['a','e','i','o','u'];
            for($i=0;$i<strlen($_POST["stringa"]);$i++){
                for($j=0;$j<5;$j++){
                    if($_POST["stringa"][$i] === $vocali[$j]){
                        $countVocali++;
                    }
                }
            }
            $countConsonanti = strlen($_POST["stringa"]) - $countVocali;
            echo "Il numero di vocali: " .$countVocali .'<br>';
            echo "Il numero di consonanti: " .$countConsonanti .'<br>';
        }

        countLettere();


        /*function caratteriUguali ($stripped){
            
            $count=0;

            $ripetuti='';


            


            for($i=0;$i<strlen($stripped);$i++){
                $ripetuti .= $stripped[$i];
                $ripetuti .= ',';
            }


            $uniqueStr = implode(',', array_unique(explode(',', $ripetuti)));

            $uniqueStr = str_replace(',', '', $uniqueStr);



            
            for($i=0;$i<strlen($uniqueStr);$i++){
                $count-=1;
                for($j=0;$j<strlen($stripped);$j++){
                    if($uniqueStr[$i] === $stripped[$j] && $i!==$j ){
                        //echo $uniqueStr[$i] ." " .$stripped[$j] .'<br>';
                        $count++;
                    }
                }
            }

            
            

            return $count;
        }*/

        //caratteriUguali($stripped);


        function countNumeri ($stripped){
            
            $count =0;
            for ($i=0;$i<strlen($stripped);$i++){
                if($stripped[$i]>0 && $stripped<9){
                    $count++;
                }
            }
            echo "Numeri presenti nella stringa: " .$count .'<br>';
            
        }

        countNumeri($stripped);


        
        //$count=caratteriUguali($stripped);
        

        function frequenzaCaratteri($stripped){



            $ripetuti='';
            
            


            for($i=0;$i<strlen($stripped);$i++){
                $ripetuti .= $stripped[$i];
                $ripetuti .= ',';
            }



            $uniqueStr = implode(',', array_unique(explode(',', $ripetuti)));

            $uniqueStr = str_replace(',', '', $uniqueStr);

            $str = str_replace(',', '', $ripetuti);
            
            $totale=0;

            for($i=0;$i<strlen($ripetuti);$i++){
                $count=1;
                for($j=0;$j<strlen($ripetuti);$j++){
                    if($ripetuti[$i] === $ripetuti[$j] && $i!==$j){
                        $count++;
                    }
                }

                for($z=0;$z<strlen($uniqueStr);$z++){
                    //echo $uniqueStr .'<br>';
                    if($uniqueStr[$z]!==0 && $ripetuti[$i]===$uniqueStr[$z] ){
                        echo "Il carattere " .$ripetuti[$i] ." è presente: " .$count ." volte" .'<br>';
                        if($count!==1){
                            $totale = $count  + $totale;
                        }
                        $uniqueStr[$z] = 0;
                    }
                }
                
            }
            echo "Il numero di caratteri ripetuti: " .$totale .'<br>';
        }

    
        frequenzaCaratteri($stripped);


        function numeroParole(){

            $count=0;

            for($i=0;$i<strlen($_POST["stringa"]);$i++){
                if($_POST["stringa"][$i]== ' '){
                    $count++;
                }
            }

            echo "Ci sono " .$count ." parole";
            
        }

        numeroParole();



        
    }
    
    else
    {
    echo "<FORM ACTION= " . $_SERVER['PHP_SELF'] ." METHOD='POST'>";
    ?>
    
    <TABLE >
            <TR>
                <TD>Stringa: <INPUT type="text" NAME="stringa"></TD> 
            </TR><br>
        </TABLE>
        <INPUT type="submit" value="Invia">
        </FORM>
    <?php
    }
    ?>
</body>
</html>