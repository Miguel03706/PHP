<?php
    $n1 = $_POST["n1"];
    $n = is_numeric($n1);

        if($n ==0){
            echo "Você digitou uma letra";
        }else{
            session_start();
            $_SESSION["n1"] = $n1;

            /*
             session_start();
             $_SESSION["n1"] = $_POST["n1"];  
            */

            echo "<form action='operacao.php' method='POST'>
            Digite outro numero : <input type='text' name='n2'>
            <input type='submit' value='Avançar'>
        </form>";
        }
?>
