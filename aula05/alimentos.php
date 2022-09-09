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

    $frutas=["Pera","Carambola","limão"];
    $legumes=["Cenoura","Jerimum","Chuchu"];

    $alimentos=array($frutas,$legumes);

    echo $alimentos[0][1];
    echo $alimentos[1][2];

    ?>
    
</body>
</html>