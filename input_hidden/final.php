<?php
     $hsep = $_POST['hsep'];
     $operacao = $_POST["operacao"];
     $potencia = $_POST['potencia'];

     $h =  explode(',',$hsep);
    
$n = is_numeric($potencia);

    if($n ==0){
        echo "Você digitou uma letra";
    }else{
    
        if($operacao == "a"){
            $result = $h[0]+$h[1];
        }elseif($operacao =="s"){
            $result = $h[0]-$h[1];
        }elseif($operacao == "m"){
            $result = $h[0]*$h[1];
        }else{
            $result = $h[0]/$h[1];
        }
        
        echo "seu resultado de $result<sup>$potencia</sup> =".$result**$potencia."<br/>";
        echo "seu resultado de $h[0]<sup>$potencia</sup> =".$h[0]**$potencia."<br/>";
        echo "seu resultado de $h[1]<sup>$potencia</sup> =".$h[1]**$potencia."<br/>"; // ** números elevados 
                                                                    //pow($result, $potencia)
    }

?>
<p align="center"> <a href="index.php">Recomeçar</a></p>