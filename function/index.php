<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <p> <input type="text" name="n1" placeholder="Digite um número"/>    </p>
    <p> <input type="text" name="n2" placeholder="Digite outro número"/>    </p>
    <p>
        <select name="op">
            <option value="a">Adição</option>
            <option value="s">Subtração</option>
            <option value="m">Multiplicação</option>
            <option value="d">Divisão</option>
        </select>
    </p>
    <p><input type="submit" value="Ok" name="calcula"/></p>

</form>
<?php
    if(isset($_POST["calcula"])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];
    
        require_once 'calcular.php';

        if($op=="a"){
          echo adicao($n1,$n2);
        }
        if($op=="s"){
            echo subtracao($n1,$n2);
        }
        if($op=="m"){
            echo multiplicacao($n1,$n2);
        }
        if($op=="d"){
            echo divisao($n1,$n2);
        }
    }
?>
</body>
</html>