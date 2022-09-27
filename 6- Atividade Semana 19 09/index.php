<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX3</title>
</head>

<body>
    <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="nome"><br><br>
        Idade: <input type="number" name="idade"><br><br>
        Nascimento: <input type="text" name="nascimento"><br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_REQUEST['nome']);
        $idade = htmlspecialchars($_REQUEST['idade']);
        $nascimento = htmlspecialchars($_REQUEST['nascimento']);
        echo $nome . "<br>" . $idade . "<br>" . $nascimento . "<br>";
    }
    ?>

</body>

</html>