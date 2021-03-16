<?php
	$n1 = $_POST["n1"];	
?>
<form action="operacao.php" method="post">
	<p><input type="text" name="n2" placeholder="Digite um outro valor"/></p>
	<input type="hidden" name="n1" value="<?php echo $n1;?>"/>
	<input type="submit" value="Avançar"/>
</form>