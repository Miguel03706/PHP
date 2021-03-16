<?php
    session_start();
    echo "Olá ". $_SESSION['nome']."<br/> por favor digite sua altura";
    $peso = $_POST["peso"];

    $_SESSION["peso"] = $peso;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura</title>
</head>
<body>
    <form action="final.php" method="POST">    
        <p> Digite sua altura: <input type="text" name="altura"/> </p>
        <p> <input type="submit" value="Avançar" /></p>
    </form>


</body>
</html>