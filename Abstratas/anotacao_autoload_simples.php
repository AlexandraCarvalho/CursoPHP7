<?php
#apredendo a usar o autoload, o qual é um metodo magico
//Arquivo usado em conjunto com Automovel.php e DelRey.php
function __autoload($nomeClasse){

    //var_dump($nomeClasse);
    //incluindo todas as classes chamadas pelo objeto
    require_once("$nomeClasse.php");
    //mas a chamade deu certo, pq os arquivos estão da mesma pasta

    
}

//instanciando o carro delrey
$carro = new DelRey();

$carro->acelerar(80);

?>