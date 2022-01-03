<?php 
  if($_POST){
      
        if(isset($_COOKIE['nome'])){
            
            echo "Nome: ".$_COOKIE['nome'] ."<br>";
            echo "Cognome: ".$_COOKIE['cognome'];
        }

        else{
            echo "Nome: ".$_POST['nome'] ."<br>";
            echo "Cognome: ".$_POST['cognome'];
        }

        setcookie('nome', $_POST['nome'], time()+10);
        setcookie('cognome', $_POST['cognome'], time()+10);
  }
  
  else
    {
    echo "<FORM ACTION= " . $_SERVER['PHP_SELF'] ." METHOD='POST'>";
    ?>
    
    <TABLE >
            <TR>
                <TD>Nome: <INPUT type="text" NAME="nome"></TD> 
            </TR><br>
            <TR>
                <TD>Cognome : <INPUT type="text" NAME="cognome"></TD> 
            </TR><br>
        </TABLE>
        <INPUT type="submit" value="Invia">
        </FORM>
    <?php
    }
    
    ?>
