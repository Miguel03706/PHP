<?php
    $hsep = $_POST['hsep'];
    $operacao = $_POST["operacao"];

    echo " <form action='final.php' method='POST'>
    digite um expoente para seu resultado: <input type='text' name='potencia'>
     <input type='hidden' id='custId' name='hsep' value='$hsep'> 
     <input type='hidden' id='custId' name='operacao' value='$operacao'> 
    <input type='submit' value='Ok' name='enviar'>
</form>"

?>

