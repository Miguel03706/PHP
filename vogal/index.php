<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogal</title>
</head>
<body>
    <form action="vogal.php" method="POST">
        <p>digite uma letra: <input type="text" name="letra"> </p>
        <p><input type="submit" name="enviar" value="Ok"></p>


    </form>
    
</body>
</html>

<?php
/*
       // está setado?
     if(isset($_POST['enviar'])){
        $valor = $_POST['letra'];
        $numerico = is_numeric($valor); //retorna boolean(1/ou/0)

        if($numerico==1){
                            // % = MOD ''-'
            $parimpar =$valor%2;
            if($parimpar==0){
                echo 'Número par';
            }else{
                echo 'Número par';
            }
        }else{
            $contagem = strlen($valor);
            if($contagem == 1){
                $valor = Strtolower($valor);
                if($valor=='a' || $valor=='e' || $valor=='i'|| $valor=='o' || $valor=='u'){
                    echo 'vogal';
                }else{
                    echo 'consoante';
                }
            }else{
                echo 'digite apenas uma letra';
            }

        }    
    }
*/
?>