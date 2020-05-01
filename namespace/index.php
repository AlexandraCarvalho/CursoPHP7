<?php

require_once("config.php");

//usando o namespace Cliente, definido na classe outra classe
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Alexandra Carvalho");
$cad->setEmail("alexandra@mail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>