<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="potencia.php" method = "post">
        <input type="number" name = "num1">
        <input type="number" name = "num2">
        <input type="submit" value = "calcular">
    </form>
<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num1'];

while($num1 >= 0 ){
    if ($num1 / $num2 == 1){
        echo $num3.' é potência de '.$num2;
        break;
    }else if ($num1 / $num2 < 1){
        echo $num3.' não é potência de '.$num2;
        break;
    }
    $num1 = $num1/$num2;
}

?>
</body>
</html>