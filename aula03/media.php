<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média final</title>
</head>
<body>
    <?php
    $nome = $_REQUEST["nome"];
    $nota1 = $_REQUEST["nota1"];
    $nota2 = $_REQUEST["nota2"];
    $media = (($nota1 + $nota2)/ 2);
        if($media<2){
        echo "<p>Olá! $nome. Sua média é $media.Você foi Reprovado.</p>";
        }elseif($media<=6){
        echo "<p>Olá! $nome. Sua média é $media.Você foi precisa realizar a prova final.</p>";
        }elseif($media>6){
        echo "<p>Olá! $nome. Sua média é $media.Você foi Aprovado.</p>";
        }

    ?>
</body>
</html>