<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Letra G</title>
</head>
<body>

<?php
$cidades = "Bento Gonçalves, Garibaldi, Caxias do Sul, Farroupilha, Barão";
$lista = explode(",",$cidades);
foreach($lista as $l){
    echo $l."<br>";
}
$outras[]="Salvador do sul";
$outras[]="Cotiporã";
$junta = array_merge($lista,$outras);
foreach($junta as $j){
    echo $j."<br>";
}
echo count($junta)."<br>";
sort($junta);
$chave = array_search("Farroupilha",$junta);
echo $chave."<br>";
$tem = in_array("Cotiporã",$junta);
echo $tem."<br>";
?>    
</body>
</html>