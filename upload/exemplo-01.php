<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>input type</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="fileUpload" accept="image/*">
		<button type="submit">send</button>

	</form>
</body>
</html>

<?php 

	if ($_SERVER["REQUEST_METHOD"]==="POST") {

		if(isset($_FILES['fileUpload'])){



				$file = $_FILES["fileUpload"];
				$mimeType  = $file["type"] ;
				//$domain = strstr($mimeType, 'image');
				//echo "teste: $domain <br>";

				$termo = 'image';

				$pattern = '/' . $termo . '/';
				if (preg_match($pattern, $mimeType)) 
				{
				  		echo 'Arquivo valido';

						if($file["error"]){

							echo "error";
						}//fim do if carrega file
						$dirUploads = "uploads";

						if(!is_dir($dirUploads)){
							mkdir($dirUploads);
						}//fim if de diretorios

						if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
							echo "Upload realizado com Sucesso!";

						}// fim do if mov upload
						else{
							throw new Exception("Error: falha ao mover o upload!");
						}

				} 
				else {
					  echo 'formato incorreto de upload';
					}


		} // fim do iff isset upload
		else{
			echo "Upload vazio";
		}

		
	} //fim do if post

 ?>