<?php 
header("Content-type: text/html; charset=utf-8");

$name = "images" ;

if(!is_dir($name)){

	mkdir($name);
	echo "diretorio $name criado com sucesso!";

} else{
	//rmdir($name);
	echo "já existe o diretorio: $name";
}


?>