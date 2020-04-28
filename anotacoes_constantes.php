<?php

//definindo uma função constante
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;


//definindo um array constante
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r(BANCO_DE_DADOS);

echo PHP_VERSION;

//constante para a barra do diretório para qlqr SO
echo DIRECTORY_SEPARATOR;
?>