<?php
//inclusão de um arquivo nessa pagina
include "exemplo-01.php";

//inclusão de um arquivo que precisa estar ok
require "exemplo-01.php";

//faz com o arquivo seja incluído apenas uma vez
include_once "arquvivo.php";
require_once "arquivo1.php";


//inclusão de arquivo em um pasta acima
include "pasta/exemplo-01.php";

//inclusão de arquivo em duas pastas acima
include "../pasta/exemplo-01.php";

function somar($a, $b){
    return $a + $b;
}

//chamando uma função:
somar(10, 20);

//mostrando um atributo:
//echo $resultado;

?>