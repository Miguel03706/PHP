<?php
	$exp = $_POST["exp"];
	$b1 = $_POST["n1"];
	$b2 = $_POST["n2"];
	
	$pot1 = pow($b1,$exp);
	$pot2 = pow($b2,$exp);
	
	echo "$b1<sup>$exp</sup> = $pot1 <br/>";
	echo "$b2<sup>$exp</sup> = $pot2 <br/>";
?>
<br/>
<a href="index.php">Recomeçar</a>





