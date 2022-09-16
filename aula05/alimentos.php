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

    echo '<h1>Vetor de vetores</h1>';

    $frutas = ["Pera", "Carambola", "Limão"];
    $legumes = ["Cenoura", "Jerimum", "Chuchu"];
    $alimentos = array($frutas, $legumes);
     
    echo '<table border="1">';
    foreach($alimentos as $al){
        echo '<tr>';
        foreach($al as $v){
            echo '<td>'.$v .'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
    
</body>
</html>