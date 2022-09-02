<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço While</title>
</head>
<body>
    <p>Decrementar de 01 em 01 com While</p>
<?php
 $i=10;
 while($i>=0){
     echo "$i<br>";
     echo "<hr>";
     $i--;
 }

?>
 <p>Decrementar de 02 em 02 com While</p>
<?php

$i=10;
 while($i>=0){
     echo "$i<br>";
     echo "<hr>";
     $i=$i-2;
 }
   ?> 
</body>
</html>
