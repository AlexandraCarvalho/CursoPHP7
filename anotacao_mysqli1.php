<?php

#ip, usuario, senha, banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//consultando os dados existentes nessa variavel, caso exista algum, caso tenha algum dado trás e armazena em row
while ($row = $result->fetch_array()) {

    //adicionando um novo item no array $data, pegando os dados de $row
    array_push($data, $row);
   // var_dump($row);
}

//inserindo o array aqui, para ser listado em json para o front-end consumir
echo json_encode($data);

//fetch_array(MYSQLI_ASSOC) 
#dica: crtl + u exibe o código fonte, quando tiver no nevagador
?>