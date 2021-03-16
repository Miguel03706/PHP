<meta charset="UTF-8">
<?php
  //  print_r($_POST);  //  print_r Exibe valores de array
  //  var_dump($_POST); //  var_dump mostra de modo mais especifico os array

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    echo 'Olá '.$nome.'<br/><br/>';

    if($senha == $confirmar_senha){
        echo 'Senha confirmada';
    }else{
        echo 'Senhas não compatíveis';
    }
?>