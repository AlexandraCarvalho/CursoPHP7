<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

#Carrega apenas um usuário
#$root = new Usuario();
//chamando metodo lá do Usuario
#$root->loadbyId(3);//aqui deve ficar o id pego na pagina do cliente
#echo $root;

//Carrega um lista de usuarios
#$lista = Usuario::getList();
#echo json_encode($lista);

//Carrega umaa lista de usuarios buscando pelo login
#$search = Usuario::search("al");
#echo json_encode($search);

//Carrega um usuario usando o login e a senha
#$usuario = new Usuario();
#$usuario->login("root","!@#$%");
#echo $usuario;

//Inserindo um user direto daqui
/*$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;*/

//Alterando um usuario
#$usuario = new Usuario();
#$usuario->loadbyId(6);
#$usuario->update("professor", "1234567890");
#echo $usuario;

//Excluindo um usuario
$usuario = new Usuario();
$usuario->loadbyId(6);
$usuario->delete();
echo $usuario;

?>