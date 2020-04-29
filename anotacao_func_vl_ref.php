<?php

#variável é uma coisa e
#parametro de função é outra

//passagem 
$s=10;
//passagem por referencia com o &
function trocaValor(&$s){

    $s +=50;

    return $s;
}

echo trocaValor($s);
echo "<br>";
echo $s;

?>