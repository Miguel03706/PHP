<?php
    $n1 = $_POST["n1"];

    $Hn1 = $_POST["Hn1"];

    var_dump($n1);
    var_dump($Hn1);

    $n = is_numeric($n1);

        if($n ==0){
            echo "Você digitou uma letra";
        }else{
           
            echo " <form action='operacao.php' method='POST'>    
            <label for='n2'>Digite outro número:</label>
            <input type='text' id='n2' name='n2'><br><br>
            <input type='hidden' id='custId' name='Hn2' value=$n1$Hn1>
            <input type='submit' value='Submit'>
       </form>";
       /*<input type="hidden" name="n2" value="<?php echo $n1;?>">*/
        }
?>

