<?php
    $operacao = $_POST["operacao"];
    
    $h = $_POST["h"];
    
    $h =  explode('=',$h);
    
    var_dump($h);


    
    
    if($operacao == "a"){
        $result = $h[0]+$h[1];
        echo "você escolheu adição<br><br>".$h[0]."+".$h[1]."=".$result."<br><br>";
    }elseif($operacao =="s"){
        $result = $h[0]-$h[1];
        echo "você escolheu subtração<br><br>".$h[0]."-".$h[1]."=".$result."<br><br>";
    }elseif($operacao == "m"){
        $result = $h[0]*$h[1];
        echo "você escolheu multiplicação<br><br>".$h[0]."x".$h[1]."=".$result."<br><br>";    
    }else{
        $result = $h[0]/$h[1];
        echo "você escolheu divisão<br><br>".$h[0] ."/". $h[1]."=".$result."<br><br>";
        }

        $hsep = implode(",", $h);

        var_dump($hsep);

        
        echo "<form action='potencia.php' method='POST'>
        
        <input type='hidden' name='hsep' value='$hsep'>
        <input type='hidden' id='custId2' name='operacao' value='$operacao'>
        <input type='submit' value=' Calculadora de potência'>
        </form>"

?>

