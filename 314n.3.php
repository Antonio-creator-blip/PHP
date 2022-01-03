<?php 
    if($_POST){
        session_start();
        
        if(!(isset($_SESSION['sfondo']))){
            $_SESSION['sfondo'] = $_POST['sfondo'];
            $_SESSION['font'] = $_POST['font'];
            $_SESSION['carattere'] = $_POST['carattere'];
        }
        echo "Sfondo: " . $_SESSION['sfondo'] ."<br>";
        echo "Font: " . $_SESSION['font'] ."<br>";
        echo "Carattere: " . $_SESSION['carattere'] ;
    }
    else
    {
        
    echo "<FORM ACTION= " . $_SERVER['PHP_SELF'] ." METHOD='POST'>";
    ?>
    
    <TABLE >
            <TR>
                <TD>Sfondo: <select name="sfondo" id="">
                    <option value="BLU">BLU</option>
                    <option value="ROSSO">ROSSO</option>
                    <option value="VERDE">VERDE</option>
                    <option value="GIALLO">GIALLO</option>
                </select></TD> 
            </TR><br>
            <TR>
                <TD>Font : <select name="font" id="">
                    <option value="ARIAL">ARIAL</option>
                    <option value="COMICSANS">COMICSANS</option>
                    <option value="CALIBRI">CALIBRI</option>
                    <option value="ROBOTO">ROBOTO</option>
                </select></TD> 
            </TR><br>
            <TR>
                <TD><INPUT type="number" step="1" name="carattere"></INPUT></TD>
            </TR>
        </TABLE>
        <INPUT type="submit" value="Invia">
        </FORM>
    <?php
    }
    
    ?>
