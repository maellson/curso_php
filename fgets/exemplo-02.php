<?php 

	$filename= "uploads/logo.png";

	$base64 =  base64_encode(file_get_contents($filename));

	$fileinfo = new finfo(FILEINFO_MIME_TYPE);

	$mimetype = $fileinfo->file($filename);

	echo "tipo do arquivo: ".$mimetype. "<br>";

	$base64encode = "data:".$mimetype.";base64,".$base64;
?>

<img src="<?=$base64encode?>">

<!--<a href="<?=$base64encode?>" target = "_blank"> Link para imagem</a> -->