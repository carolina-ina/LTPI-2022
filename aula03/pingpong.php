<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $mensagem1 = 'ping';
       $mensagem2 = 'pong';   
       for($i =1; $i<100;){
       if($i%3==0 && $i%5==0){
       echo "$mensagem1"."$mensagem2". '<br>';
       } elseif($i%5 ==0){
       echo "$mensagem2".'<br>';   
       } elseif($i%3 ==0) {
       echo "$mensagem1".'<br>';
       } else{
       echo $i.'<br>';
       } $i++;    
   
       }
    ?>
</body>
</html>