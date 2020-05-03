<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//inciando uma transação
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));

//rollback volta a transação que foi executado no BD (crtl + Z)
#$conn->rollback();

//commit confirma a transação
$conn->commit();

echo "Deletado OK!";

?>