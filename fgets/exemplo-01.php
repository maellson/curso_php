<?php 

	$filename = "usuarios.csv";

	if(file_exists($filename)){

		$file = fopen($filename,"r");

		$headers = explode(";", fgets($file));
		$data = array();

		while ($row = fgets($file) ) {
			$rowData =  explode(";",$row); 
			$linhas=array();


			for ($i = 0; $i < count($headers); $i++) {
				
				$linhas[$headers[$i]]=$rowData[$i];

			}

			array_push($data, $linhas);
				  
 
		}

		fclose($file);

		echo json_encode($data);
	}

?>