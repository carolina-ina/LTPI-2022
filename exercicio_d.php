<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x[0]["nome"]="Joaquim";
    $x[0]["idade"]=30;
    $x[1]["nome"]="Lindalva";
    $x[1]["idade"]=26;
    $x[1]["nome"]="Ribamar";
    $x[1]["idade"]=44;
    foreach($x as $i =>$v)
        foreach($v as $j => $z)
        echo $i."-".$j."-".$z."<br>";
    ?>
    
    
</body>
</html>