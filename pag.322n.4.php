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
        $idfile = fopen("nani.txt","r");
        $arr = array();
        while(! feof($idfile))  {
            $result = fgets($idfile);
            array_push($arr, $result);
          }
        for($i=count($arr)-1;$i>-1;$i--){
            echo strrev($arr[$i]) ."<br>" ;
        }
        fclose($idfile);
    ?>
</body>
</html>