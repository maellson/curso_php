<?php 

	
	//$file = fopen("log.txt","w+");//ZERA E SUBSTITUI
	$file = fopen("log.txt","a+");//adiciona no fim

	fwrite($file, date("d/m/Y H:i:s")."\r\n");
	fclose($file);

	echo "Arquivo criado com Sucesso!";



 ?>