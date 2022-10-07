<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $m=0;

        $aluno[0]["nome"] = "João";
        $aluno[0]["nota1"] = 5.0;
        $aluno[0]["nota2"] = 6.0;
        $aluno[0]["media"] = $m;
        $aluno[1]["nome"] = "Maria";
        $aluno[1]["nota1"] = 7.0;
        $aluno[1]["nota2"] = 8.5;
        $aluno[1]["media"] = $m;
        $aluno[2]["nome"] = "Rita";
        $aluno[2]["nota1"] = 6.0;
        $aluno[2]["nota2"] = 7.0;
        $aluno[2]["media"] = $m;
        $aluno[3]["nome"] = "Manuel";
        $aluno[3]["nota1"] = 8.0;
        $aluno[3]["nota2"] = 6.0;
        $aluno[0]["media"] = $m;
        echo "<table border=\"1\">";
        echo "<tr><th>Nome</th><th>Nota1</th><th>Nota2</th><th>Média</th></tr>";
        foreach($aluno as $al){
            $m= ($al["nota1"] + $al["nota2"])/2;
            echo "<tr>";
            echo "<td>".$al["nome"]."</td>" ;
            echo "<td>".$al["nota1"]."</td>" ;            
            echo "<td>".$al["nota2"]."</td>" ;  
            echo "<td>".$m."</td>";

            echo '</tr>';
        }
        echo "</table>";
?> 
</body>
</html>