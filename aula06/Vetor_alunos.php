<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Vetor Alunos</title>
</head>
<body>
    <?php

        echo '<h1>Tabela Alunos</h1>';
    
        $al1=["Salomão","M",53];
        $al2=["Carol","F",30];
        $al3=["Wanderson","M",25];
        $alunos=[$al1,$al2,$al3];
    
         
        echo '<table border="1">';
        foreach($alunos as $v){
            echo '<tr>';
            foreach($v as $x){
                echo '<td>'.$x .'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    ?>
        
        
</body>
</html>