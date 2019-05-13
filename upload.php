<?php

$nome = $_FILES["download.php"]["name"];
$arquivo = $_FILES["download.php"]["tmp_name"];
$caminho = "uploads/".$nome;
$movendo = move_uploaded_file($aquivos, $caminho);


$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Já existe um arquivo com este nome\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>";

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
           
    <!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
    <form enctype="multipart/form-data" action="C:\xampp\htdocs\aula05-php-form" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />



    </form>
    
</body>
</html>







