<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentos</title>
</head>
<body>
    <?php

    
//VETOR DE VETORES
    $frutas=["Pera","Carambola","limão"];
    $legumes=["Cenoura","Jerimum","Chuchu"];

    $alimentos=array($frutas,$legumes);

    echo "<h1> Exemplo de vetor de vetor</h1>";
    echo $alimentos[0][1];
    echo"<br>";
    echo $alimentos[1][2];
    echo "<h1> Frutas </h1>";
    foreach($frutas as $v){
        echo $v. "<br>";
    }
    echo "<br>";
    echo "<h1>Legumes</h1>";

    foreach($legumes as$v){
        echo $v. "<br>";
    }
    ?>
    
</body>
</html>