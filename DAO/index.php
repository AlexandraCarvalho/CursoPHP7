<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$root = new Usuario();

//chamando metodo lá do Usuario
$root->loadbyId(3);//aqui deve ficar o id pego na pagina do cliente

echo $root;

?>