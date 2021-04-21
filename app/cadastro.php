<?php
	require_once "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/escola.svg">
	<title>Cadastro</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
     <script type="text/javascript" src="bootstrap.min.js"></script> 
	 <link rel="stylesheet" type="text/css" href="estilos/stylelogin.css">

<header>
	<div class="login">
		<form action="cadastro.php" method="post">
        <p>
				<input type="text" name="nome" placeholder="Digite seu nome">
			</p>
			<p>
				<input type="text" name="email" placeholder="Digite seu e-mail">
			</p>
			<p>
				<input type="text" name="senha" placeholder="Digite sua senha">
			</p>
			<input type="submit" value="cadastrar" name="cadastrar" id="btn_login"/>
		</form>
        <br>
        <p>Já possui uma conta? <a href="login.php"> Logar!</a></p>
		<a href="index.php">Retornar</a>
	</div>
</header>

</body>
</html>

<?php

if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //print_r($_POST);

    
    if($nome == ''){
        echo "<script> alert('digite seu nome')</script>";
    }else if($email == ''){
        echo "<script> alert('digite seu email')</script>";
    }else if(!isset($senha)){
        echo "<script> alert('digite uma senha')</script>";
    }else{


            $querychecagem = "SELECT email FROM usuarios WHERE email='$email'";
            $executar = mysqli_query($conexao, $querychecagem);
            $achei = mysqli_num_rows($executar);
           // var_dump($achei);
            if($achei >= 1){
                     echo "<script>
                             alert('Já existe um usuario com esse email!');
                             location.href(cadastro.php);
                          </script>";
                 }else{	 
                     $senha = sha1($senha);
                     $query = "INSERT INTO usuarios(nome, email, senha) 
                               VALUES ('$nome','$email','$senha')";
                     $executa = mysqli_query($conexao,$query);

                if($executa==1){
                    echo "<script>
                            alert('dados inseridos');
                          </script>";
                          header('location:login.php');
                }else{
                    echo "<script>
                            alert('Erro ao inserir dados');
                          </script>";
                }

            }
    }
}

?>
