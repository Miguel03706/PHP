<?php
    $operacao = $_POST["operacao"];

    session_start();

    $_SESSION["operacao"] = $operacao;


    $n1= $_SESSION["n1"];
    $n2= $_SESSION["n2"];

    if($operacao == "a"){
        $result = $n1+$n2;
        echo "você escolheu adição<br><br>".$n1."+".$n2."=".$result."<br><br>";
        $_SESSION['result'] = $result;
    }elseif($operacao =="s"){
        $result = $n1-$n2;
        echo "você escolheu subtração<br><br>".$n1."-".$n2."=".$result."<br><br>";
        $_SESSION['result'] = $result;
    }elseif($operacao == "m"){
        $result = $n1*$n2;
        echo "você escolheu multiplicação<br><br>".$n1."x".$n2."=".$result."<br><br>";
        $_SESSION['result'] = $result;
    }else{
        $result = $n1/$n2;
        echo "você escolheu divisão<br><br>".$n1 ."/". $n2."=".$result."<br><br>";
        $_SESSION['result'] = $result;
    }
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
    <a href="potencia.php"> Calculadora de potência </a>


</body>
</html>