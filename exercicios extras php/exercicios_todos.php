<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Vetor Multidimensional</title>
</head>
<body>
<?php
echo"<h1>Exercício letra a</h1>";  
$x[0][0]= 15;
$x[0][1]= 6;
$x[1][0]= 2;
$x[1][1]= 5;
foreach ($x as $v)
    echo $v."<br>";

?>
<?php
echo"<h1>Exercício letra B</h1>"; 
$x[0][0]= 15;
$x[0][1]= 6;
$x[1][0]= 2;
$x[1][1]= 5;
foreach($x as $v)
    foreach($v as $z)
        echo $z."<br>";
?>
<?php
echo"<h1>Exercício letra C</h1>";
$x[0]["nome"]= "Beatriz";
$x[0]["idade"]= 6;
$x[1]["nome"]= "Carlos";
$x[1]["idade"]= 5;
foreach($x as $v)
    foreach($v as $z)
        echo $z."<br>";
?>
<?php
echo"<h1>Exercício letra D</h1>";
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
<?php
echo"<h1>Exercício letra E</h1>";
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
<?php
echo"<h1>Exercício letra F</h1>";
$p[]="Joaquim";
$p[]="Lindalva";
$p[]="Ribamar";
$p[]="Beatriz";
$p[]="Carlos";
$p[]="Carlos José";
$p[]="Beatriz";
$quant= count($p);
echo "Quant:".$quant."<br>";
unset($p[2]);
foreach($p as $s){
    echo $s."<br>";
}
$v = array_unique($p);
foreach($v as $r){
    echo $r."<br>";
}
?> 
<?php
echo"<h1>Exercício letra G</h1>";
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
