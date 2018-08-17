<?php 

$name = "images" ;

if(!is_dir($name)){

	mkdir($name);
	echo "diretorio $name criado com sucesso!";

} else{
	echo "já existe o diretorio: $name";
}

?>