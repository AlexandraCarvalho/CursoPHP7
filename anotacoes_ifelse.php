<?php

$qualSuaIdade = 25;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 60;

if($qualSuaIdade < $idadeCrianca){

    echo "Criança";

} elseif($qualSuaIdade < $idadeMaior) {
    
    echo "Adolescente";

} else if($qualSuaIdade < $idadeMelhor){

    echo "Adulto";
 
} else {
    echo "Idoso";
}

echo "<br>";

/* operador ternario:
(condição) ? se verdadeiro : se falso;
*/
echo ($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";



/*o else só pode aparecer uma vez
* e toda vez que aparecer um elseif
* tem que ser inserido uma nova condição
*/


?>