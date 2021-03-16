<?php

    session_start();
    echo "Olá ". $_SESSION['nome']."<br/> por favor digite seu peso";

    $idade = $_POST["idade"];

    $_SESSION["idade"]= $idade;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso</title>
</head>
<body>
    <form action="altura.php" method="POST">    
        <p> Digite seu peso: <input type="text" name="peso"/> </p>
        <p> <input type="submit" value="Avançar" /></p>
    </form>


</body>
</html>