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
//  VETORES ASSOCIATIVOS (POSSUEM ÍNDICES NÃO NUMÉRICOS)
    $notas['Thomas']=9.0;
    $notas['Ricardo']=8.5;
    $notas['Roberth']=8.0;

    //outra forma
    $notas=['Thomas' => 9.0, 'Ricardo'=>8.5,'Roberth' =>8.0];

    //outra forma
    $notas= array('Thomas' =>9.0, 'Ricardo'=>8.5, 'Roberth'=>8.0);
    echo '<h1>Mostrando apenas o valor</h1>';
    foreach($notas as $v){
        echo $v ."<br>"; 
    }
    echo '<h1>Mostrando o nome e valor</h1>';
    foreach($notas as $p=>$v){
        echo "$p :  $v <br>"; 
    }

    ?>
    
</body>
</html>