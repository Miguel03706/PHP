<?php
	require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="imagens/escola.svg">
	<title>Document</title>
</head>
<body>

	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
     <script type="text/javascript" src="bootstrap.min.js"></script> 
	 <link rel="stylesheet" type="text/css" href="estilos/stylelogin.css">

<header>
	<div class="login">
		<form action="login.php" method="post">
			<p>
				<input type="text" name="email" placeholder="Digite seu e-mail">
			</p>
			<p>
				<input type="text" name="senha" placeholder="Digite sua senha">
			</p>
			<input type="submit" value="Login" name="login" id="btn_login"/>
		</form>
		<br>
		<p>Não possui uma conta? <a href="cadastro.php"> Cadastrar!</a></p>
		<a href="index.php">Retornar</a>
	</div>
</header>

</body>
</html>

<?php
	if(isset($_POST["login"])){
		//var_dump($_POST);
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$senha = sha1($senha);
		$query="
			SELECT id_usuario,nome,email,senha
			FROM usuarios
			WHERE email = '$email' AND senha='$senha';
		";
		$executa = mysqli_query($conexao,$query);
		$achei = mysqli_num_rows($executa);
		
		if($achei==1){
			$dados = mysqli_fetch_array($executa);
			session_start();
			$_SESSION["id_usuario"] = $dados["id_usuario"];
			$_SESSION["nome"] = $dados["nome"];
			header("location: index.php");
		}else{
			echo "
				<script>
					alert('Dados Incorretos');
				</script>";
		}
		
	}
?>
