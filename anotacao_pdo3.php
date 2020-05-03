<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

//liga cada paramentro, com o valor passado no bindParam
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado OK!";

?>