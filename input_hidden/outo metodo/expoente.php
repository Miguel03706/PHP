<?php
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
?>
<form action="resultado_final.php" method="post">
	<p><input type="text" name="exp" placeholder="Digite o expoente"/></p>
	<input type="hidden" name="n1" value="<?php echo $n1;?>"/>
	<input type="hidden" name="n2" value="<?php echo $n2;?>"/>
	<input type="submit" value="Avançar"/>
</form>