<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <?php
    $nomes =['Edna','Carol Miranda','Carol Abreu'];
    $nomes[] ='Milena';
    $i =0;
    echo'<h2>Usando for</h2>';
    echo'<table border="1">';
    for($i=0;$i<=3;$i++){

     echo '<tr><td>' .$nomes[$i].'</td></tr>' ;
    
    }
    echo'</table>';

    ?>
    
</body>
</html>