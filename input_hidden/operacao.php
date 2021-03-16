<?php
    $n2 = $_POST["n2"];

    $Hn2 = $_POST['Hn2'];
    

    var_dump($n2);
    var_dump($Hn2);
    $n = is_numeric($n2);

    if($n ==0){
        echo "Você digitou uma letra";
    }else{
  

            // poderia fazer separado e com o php apenas no value (ver dps)
    echo "  <form action='result.php' method='POST'>
    Escolha uma operação: <select name='operacao'>
        <option value='a'> Adição(+)</option>
        <option value='s'> Subtração(-)</option>
        <option value='d'> Divisão(/)</option>
        <option value='m'> Multiplicação(x)</option>
        <input type='hidden' id='custId' name='h' value='$Hn2$n2'> 
    </select>
    <input type='submit' value='Avançar'>
</form>";
    }
?>
