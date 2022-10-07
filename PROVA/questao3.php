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
$p[0]["nome"] = "Ribamar";
$p[0]["idade"] =31;
$p[1]["nome"] = "Joaquim";
$p[1]["idade"] = 26;
$p[2]["nome"] = "Manoel";
$p[2]["idade"] = 18;
$p[3]["nome"] = "Sebastião";
$p[3]["idade"] = 44;
$i = -1;
$c = -1;
foreach($p as $id => $s){
	if($s["idade"]>$i){
		$i = $s["idade"];
		$c = $id;
	}
}
echo $p[$c]["nome"];
?>
</body>
</html>