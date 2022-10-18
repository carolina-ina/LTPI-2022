<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÁLCULO DE IMC</title>
</head>
<body>


<h1 class = "text-center">Cálculo do IMC</h1>
    <form action = "Form_imc1.php" method= "post" class="form-group col-6 mx-auto">
        <div class="form-group">
            <label for="">Digite seu peso</label>
            <input type= "number" class= "form-control" name="peso">
</div>
<div class= "form-group">
    <label for=""> Digite a altura</label>
    <input type="text" class="form-control" name="altura">
    </div>
    <button class="btn btn-secondary btn-block">Calcular</button>
    
</form>
<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc=$peso/pow($altura,2);
if($imc<18.5){
    echo "<input type= 'text' class='form-control col-6 mx-auto' value=".$imc.">";
    echo "<h3 class= 'text-center'>Magreza</h3>";
    }
    else if($imc>=18.5 and $imc<24.9){
        echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>Normal</h3>";
            }
    else if($imc>=24.9 and $imc<30){
        echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>Sobrepeso</h3>";
                    }
    else{
        echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
        echo "<h3 class='text-center'>Obesidade</h3>";
        

    }







?>
</body>
</html>