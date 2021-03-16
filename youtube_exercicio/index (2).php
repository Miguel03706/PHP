<form action="" method="post">
	<p>
		<input type="text" name="url" placeholder="Cole aqui a URL do vídeo"/>
	</p>
	<input type="submit" value="Carregar Vídeo" name="enviar"/>
</form>
<?php
	if(isset($_POST["enviar"])){
		
		$url = $_POST["url"];
		$cd = explode("=",$url);
		$playlist = explode("&",$cd[1]);
		//print_r($playlist); exit;
		
		if(isset($playlist[1])&& $playlist[1]=='list'){
			$codigo = $playlist[0];
		}else{
			$codigo = $cd[1];
		}
		
		echo "<iframe width='560' height='315' 
		src='https://www.youtube.com/embed/$codigo'
		frameborder='0' allow='accelerometer; autoplay; 
		encrypted-media; gyroscope; picture-in-picture' 
		allowfullscreen></iframe>";
	}
?>










