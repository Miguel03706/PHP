<?php

    session_start();
    
    
    $altura = $_POST["altura"];
    $nome = $_SESSION["nome"];
    $sexo = $_SESSION["sexo"];
    $idade = $_SESSION["idade"];
    $peso = $_SESSION["peso"];

    echo "Olá ". $_SESSION['nome']."<br/> confira o seu relatório<br/><br/>";

    $IMC = $peso/($altura*$altura);
    $IMC = round($IMC,2);

    if($sexo == "m"){
        $tipo = "Masculino";
    }elseif($sexo == "f"){
        $tipo = "Feminino";
    }else{
        $tipo = "Prefiro não dizer";
    }

    echo "Nome: ".$nome."<br/>";
    echo "Sexo: ".$tipo."<br/>";
    echo "Idade: ".$idade."<br/>";
    echo "Peso: ".$peso." Kg<br/>";
    echo "Altura: ".$altura." m<br/>";
    echo "I.M.C: ".$IMC."<br/>";


?>