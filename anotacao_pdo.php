<?php
#PDO: objeto de dados php
//serve pra conexão com qualquer banco de dados(MySql/Oracle/SQLServer)
//tipo de banco:nome do banco; host/local, usuario,senha
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

//busca todos os dados 
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

    foreach ($row as $key => $value) {

        echo "<strong>" .$key.":</strong>".$value."<br/>";
   
    }

    echo "=================================================<br>";
}

//var_dump($results);

?>