<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio CPF</title>
</head>
<body>
    <?php
    $cpf = $n;
    $tamcpf = strlen($n);
    for ($i = 0; $i < $n; $i++) {
    echo 'Caracter ' . $i . ' = ' . $n[$i] . '<br />';
}
    function formata_cpf($n){

    }

    formata_cpf("12345678910");
    ?>
</body>
</html>