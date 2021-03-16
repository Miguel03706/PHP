<?php
    $nome = $_POST['nome'];

    session_start();
    $_SESSION["nome"] = $nome; // "Retoma" a variavel /cria uma sessão c/msm valor

    echo 'Olá '. $nome."<br> por favor informe o seu sexo:";
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sexo</title>
    </head>
    <body>
    <form action="idade.php" method="POST">    
        <p><input type="radio" name="sexo" value="f"/>Feminino
        <input type="radio" name="sexo" value="m"/>Masculino
        <input type="radio" name="sexo" value="n"/>Prefiro não dizer
        <p> <input type="submit" value="Avançar" /></p>
    </form>
        
    </body>
    </html> 
