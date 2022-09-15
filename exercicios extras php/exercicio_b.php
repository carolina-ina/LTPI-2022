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
    $x[0][0]= 15;
    $x[0][1]= 6;
    $x[1][0]= 2;
    $x[1][1]= 5;
    foreach($x as $v)
        foreach($v as $z)
            echo $z."<br>";
    ?>
    
    
</body>
</html>