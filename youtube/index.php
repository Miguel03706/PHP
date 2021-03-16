<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <p>
            <input type="text" name="url" placeholder="Digite a url do video"/>
        </p>
        <input type="submit" name="enviar" value="Carregar video"/>
    </form>
    
</body>
</html>

<?php
    if(isset($_POST["enviar"])){
        $url = $_POST["url"];
        $cd = explode("=",$url); //divide a variavel em um array (limitação(onde quebrar),$variavel)

        echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$cd[1]' frameborder='0' allow='accelerometer'; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    }

?>