<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
    function media($n1,$n2){
        $media = ($n1+$n2)/2;
        return $media;
    }
    echo "Média igual a ".media(5,8)."<br>";

    ?>

</body>
</html>