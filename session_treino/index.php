<?php 
    session_start();  // starta
    session_destroy();// e destroi
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1</title>
</head>                                                                                     
<body>
        <form action="n2.php" method="POST">
            Digite um numero : <input type="text" name="n1">
            <input type="submit" value="Avançar">
        </form>
</body>
</html>
