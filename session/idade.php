<?php
    session_start();
    print_r($_POST);
    print_r($_SESSION);

    echo "<br><br> Olá ". $_SESSION['nome']."<br> Por favor informe sua idade";

    $sexo = $_POST["sexo"];  //realmente retoma a variavel kkakkak
    
    $_SESSION["sexo"] = $sexo;  // "Retoma" a variavel /cria uma sessão c/msm valor
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <form action="peso.php" method="POST">    
        <p> Digite sua idade: <input type="number" name="idade"/> </p>
        <p> <input type="submit" value="Avançar" /></p>
    </form>


</body>
</html>