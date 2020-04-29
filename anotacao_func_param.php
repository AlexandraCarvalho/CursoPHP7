<?php

##parâmetro tbm é conhecido como argumento.

function ola($texto){

    return "Olá $texto! <br>";
}

echo ola("mundo maravilhoso!");
echo ola("Alixandra!");
echo ola("Mulheres!");


//com dois parametros
//os valores definidos caom obrigatorios, devem sempre 
//estar a esquerda
function ola2($texto, $periodo){

    return "Olá $texto! $periodo <br>";
}

echo ola2("Mulheres!", "Bom dia");
echo ola2("Gatas!" ,"Boa Tarde");
echo ola2("Minas!" ,"Boa Noite");



?>