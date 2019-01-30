<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>input type</title>
	<link rel="stylesheet" href="">
</head>
<body>
    <form enctype="multipart/form-data" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>
</body>
</html>
<?php 

if (!empty($_POST['userfile'])) {
            
            //carrega o arquivo
            $subido = $_POST['userfile'];
            
            //escreve o sha256 na tela
            echo "sha256 do arquivo.csv: " . hash_file('sha256', $subido) ."<br>";
}else{
    echo "essa buceta ta vazia denovo";
}