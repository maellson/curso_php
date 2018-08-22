<?php 

	$file = fopen("teste.txt", "w+");

	fclose($file);
	echo "arquivo criado! <br>"; 

	unlink("teste.txt");

	echo "arquivo removido com sucesso!"; 


 ?>