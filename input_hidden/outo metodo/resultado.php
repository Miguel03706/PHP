<?php
	//print_r($_POST);exit;
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
	$op = $_POST["op"];	
	
	if($op=="m"){
		echo "Você escolheu Multiplicação <br/>";
		$resultado = $n1*$n2;
		echo $n1 . " x ". $n2 . " = ".$resultado;
	}elseif($op=="a"){
		echo "Você escolheu Adição <br/>";
		$resultado = $n1+$n2;
		echo $n1 . " + ". $n2 . " = ".$resultado;
	}elseif($op=="d"){
		echo "Você escolheu Divisão <br/>";
		$resultado = $n1/$n2;
		echo $n1 . " : ". $n2 . " = ".$resultado;
	}else{
		echo "Você escolheu Subtração <br/>";
		$resultado = $n1-$n2;
		echo $n1 . " - ". $n2 . " = ".$resultado;
	}
?>
<br/><br/>
<form action="expoente.php" method="post">
	<input type="hidden" name="n1" value="<?php echo $n1;?>"/>
	<input type="hidden" name="n2" value="<?php echo $n2;?>"/>
	<input type="submit" value="Avançar para a calculadora de potências"/>
</form>






