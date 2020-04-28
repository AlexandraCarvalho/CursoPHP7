<?php
$pessoas = array();

//inserindo um item nesse array já criado
array_push($pessoas, array(
    'nome'=>'Alexandra',
    'idade'=>25
));

array_push($pessoas, array(
    'nome'=>'Abigail',
    'idade'=>22
));

//BAIXAR extenção jsonView, pra visualiza no navegador
//passando um array para o json/transformando em JSON
echo json_encode($pessoas);
  //JSON é JavaScript Object Notacion


#### Criando um Array a partir de um JSON
$json = '[{"nome":"Alexandra","idade":25},{"nome":"Abigail","idade":22}]';

$data = json_decode($json, true);

var_dump($data);
?>