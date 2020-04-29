<?php


//Novidade através do PHP7!
//declarando o tipo como interiro
//e um array como parametro da função
function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(2,2,7);
echo "<br>";
echo soma(3,4);
echo "<br>";

?>