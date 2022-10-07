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
$contador = 0; 
$nomes = array("João","Maria","José","Paulo","Carlos"); 
echo '<ol>';
For ($contador=0;  $contador<= 4; $contador++){ 
  echo '<li>' . $nomes[$contador]. "</li>"; 
 
} 
?>
</body>
</html>