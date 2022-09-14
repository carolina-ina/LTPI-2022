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
    $x[0]["nome"]= "Beatriz";
    $x[0]["idade"]= 6;
    $x[1]["nome"]= "Carlos";
    $x[1]["idade"]= 5;
    foreach($x as $v)
        foreach($v as $z)
            echo $z."<br>";
    ?>
    
    
</body>
</html>