<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina a</title>
</head>
<body>
    <p>ETEC DE ITAQUAQUECETUBA </p>
    
    <?php
      echo'<p>';
        include_once "b.php"; // inclui na página // não trava a aplicação
       // require "b.php";   // inclui na página // trava a aplicação
    
    ?>
    <p> Hoje é quarta feira =)</p>
    <?php
      echo'<p>';
      require "c.php";
    ?>
</body>
</html>