<?php
#para ser uma função, precisa retornar algo/valor
# tem o 'return' dentro dela
#se não é só uma subrotina

//declarando a função
function ola(){

   //echo "Olá Mundo! <br>";

   return "Olá Mundo! <br>";
}

//chamando a função
echo ola();


/******************************/
function salario(){

    return 1045.00;
}

echo "José recebeu 3 salários". " ". (salario()*3);

?>