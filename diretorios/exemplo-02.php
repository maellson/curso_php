<?php 

	$images = scandir("images");

	$data =array();

	foreach ($images as $img) {
		if(!in_array($img,array(".",".."))){
			$filename="images".DIRECTORY_SEPARATOR.$img;
			$info = pathinfo($filename);
			//var_dump($info);
			$info['info']=filesize($filename);
			$info['modified']=date("d/m/y H:i:s", fileatime($filename));
			$info["url"]="http://localhost/curso_php/diretorios/".str_replace("\\","/",$filename);
			array_push($data,$info);
		}
	}

	echo json_encode($data);


 ?>