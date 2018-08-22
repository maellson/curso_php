<?php 

	require_once("config.php");

	$sql = new sql();
	$usuario = $sql->select("SELECT *FROM tb_usuario ORDER BY login");

	

	$headers = array();

	foreach ($usuario[0] as $key => $value) {
		array_push($headers,ucfirst($key));
		
	}

	 $file = fopen("usuarios.csv","w+");

	fwrite($file, implode(";", $headers)."\r\n");

	foreach ($usuario as $row) {
		$data = array();

		foreach ($row as $key => $value) {
			array_push($data, $value);
			
		} //End foreach de coluna
		fwrite($file, implode(";", $data)."\r\n");
	}// End foreach de linha


	fclose($file);

	
 ?>