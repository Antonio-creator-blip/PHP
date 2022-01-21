<?php
//Verifica campo - tecnica POSTBACK - 
if (!isset($_POST['invia']))
{
   
   echo "<FORM ACTION='".$_SERVER['PHP_SELF']."' ENCTYPE='multipart/form-data' METHOD='post'>";
   echo "<INPUT TYPE='file' NAME='file_caricato'>";
   echo "<INPUT TYPE='text' NAME='nameuser'>";
   echo "<INPUT TYPE='submit' value='Upload file' NAME='invia'>";
   echo "</FORM>";
}
else
{
   if(isset($_FILES['file_caricato'])){
        $f=$_FILES['file_caricato']['type'];
        $nome=$_FILES['file_caricato']['name'];
        $nome_tmp=$_FILES['file_caricato']['tmp_name'];
        move_uploaded_file($nome_tmp,"C:/$nome");
   }else{
       $idfile = fopen("gabibo.txt", "w+");
       fwrite($idfile, $_POST['nameuser']);
   }
}
?>
