<?php
    $n2 = $_POST["n2"];
    $n = is_numeric($n2);

    if($n ==0){
        echo "Você digitou uma letra";
    }else{
    session_start();
    $_SESSION["n2"] = $n2;

    echo "  <form action='result.php' method='POST'>
    Escolha uma operação: <select name='operacao'>
        <option value='a'> Adição(+)</option>
        <option value='s'> Subtração(-)</option>
        <option value='d'> Divisão(/)</option>
        <option value='m'> Multiplicação(x)</option>
    </select>
    <input type='submit' value='Avançar'>
</form>";
    }
?>
