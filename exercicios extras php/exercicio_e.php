<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Letra E</title>
</head>
<body>
    <?php
    $p[0]["nome"]="Joaquim";
    $p[0]["idade"]=30;
    $p[1]["nome"]="Lindalva";
    $p[1]["idade"]=26;
    $p[1]["nome"]="Ribamar";
    $p[1]["idade"]=44;
    $i=-1;
    $c=-1;
    foreach($p as $id =>$s){
        if($s["idade"]>$i){
            $i= $s["idade"];
            $c =$id;
            }
        }
        echo $p[$c]["nome"];
    ?>
    
    
</body>
</html>