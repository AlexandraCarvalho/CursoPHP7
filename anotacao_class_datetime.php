<?php

//criando o obj
$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";
//acessando o método
echo $dt->format("d/m/Y H:i:s");

?>