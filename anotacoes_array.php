<?php

//até o momento é só um vetor (pq tem uma dimenção)
$frutas = array("laranja", "coco", "uva");

print_r($frutas);

//array bidimencional
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][2];

//listando o ultimo item desse array
echo end($carros[0]);

/////////////////
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

print_r($pessoas);
//pesquisando pelo index, e a chave 'nome'
print_r($pessoas[0]['nome']);
  //JSON é JavaScript Object Notacion


?>