<?php
 
session_start();

$operacao= $_SESSION["operacao"];
$potencia = $_POST["potencia"];
$_SESSION["operacao"] = $operacao;

$n = is_numeric($potencia);

    if($n ==0){
        echo "Você digitou uma letra";
    }else{
        $n1= $_SESSION["n1"];
        $n2= $_SESSION["n2"];
    
        if($operacao == "a"){
            $result = $n1+$n2;
        }elseif($operacao =="s"){
            $result = $n1-$n2;
        }elseif($operacao == "m"){
            $result = $n1*$n2;
        }else{
            $result = $n1/$n2;
        }
        
        echo "seu resultado de $result<sup>$potencia</sup> =".$result**$potencia."<br/>"; // ** números elevados 
                                                                    //pow($result, $potencia)
    }

?>
<p align="center"> <a href="index.php">Recomeçar</a></p>