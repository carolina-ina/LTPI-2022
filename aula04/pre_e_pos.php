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
    $i=1;
    echo $i++; //vai mostrar 1 (pré incremento)
    echo $i; //vai mostrar 2(pós incremento)
    echo $i-- ;//vai mostrar 2(pré decremento)
    echo $i; //vai mostrar 1(pós decremento)

    ?>
    <?php
    $i=1;
    echo --$i; //vai mostrar 2(pré incremento)
    echo $i; //vai mostrar 2
    echo --$i; //vai mostrar 1(pré incremento)
    echo $i; //vai mostrar 1
    ?>
    
</body>
</html>