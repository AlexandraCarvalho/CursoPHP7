<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUE (:LOGIN, :PASSWORD)");

$login = "josefine";
$password = "1234567890";

//liga cada paramentro, com o valor passado no bindParam
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

?>