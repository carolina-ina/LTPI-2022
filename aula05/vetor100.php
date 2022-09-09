<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    echo"<p> Usando For </p>";
    $i =0;
    $numeros[$i]= $i+1;
    echo'<table border="1">';
    echo'<tr><th>Vetor</th><th>Valor</th></tr>';

    for($i=0;$i<100;$i++){
    $numeros[$i]=$i+1;
        
    echo '<tr><td>'.$i.'</td><td>'.$numeros[$i].'</td></tr>';
    }
    ?>  
    <?php 
    echo"<p> Usando While </p>";
    $i =0;
    $numeros[$i]= $i+1;
    $soma= $i + $numeros[$i];
    echo"<br>";
    echo'<table border="1">';
    echo'<tr><th>Vetor</th><th>Valor</th><th>Soma</th></tr>';

    while($i<=100){
    $numeros[$i]=$i+1;
    $soma= $i + $numeros[$i];

        
    echo '<tr><td>'.$i.'</td><td>'.$numeros[$i].'</td><td>'.$soma.'</td></tr>';
    $i ++;
    }
       
    
    
    ?> 
</body>
</html>