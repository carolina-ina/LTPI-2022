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
    $idades= array(18,30,25,18);
    $i =0;
    echo'<h2>Usando for</h2>';
    echo'<table border="1">';
    echo'<tr><th>Nome</th><th>Idade</th></tr>';
    for($i=0;$i<=3;$i++){

     echo '<tr><td>'.$nomes[$i].'</td><td>'.$idades[$i].'</td></tr>' ;
         
    }
    echo'</table>';
    echo'<h2>Usando for</h2>';
    echo'<table border="1">';
    echo'<tr>';
    for($i=0;$i<=3;$i++){

    echo '<td>'.$nomes[$i].'</td>' ;
    echo '<td>'.$idades[$i].'</td>';
         
    }
    echo'</table>';

    ?>
    
</body>
</html>