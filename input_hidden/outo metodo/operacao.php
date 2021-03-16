<?php
	//print_r($_POST);	
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
?>
<form action="resultado.php" method="post">
	<p>
		Por favor, escolha uma operação:
		<select name="op">
			<option value="a">Adição</option>
			<option value="s">Subtração</option>
			<option value="m">Multiplicação</option>
			<option value="d">Divisão</option>
		</select>
	</p>
	<input type="hidden" name="n1" value="<?php echo $n1;?>"/>
	<input type="hidden" name="n2" value="<?php echo $n2;?>"/>
	<input type="submit" value="Avançar"/>
</form>