<?php

#ip, usuario, senha, banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Error: " . $conn->connect_error;
}

//preparando um comando/query para ser enviado para o banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//definindo os parametros doq é definido em VALUES, param: tipo dos dados, dado1, dado2
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

//executando, enviando para o banco de dados
$stmt->execute();

$login = "root";
$pass = "!@#$%";

//executando, enviando para o banco de dados
$stmt->execute();

?>