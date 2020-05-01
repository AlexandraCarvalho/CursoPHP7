<?php
#apredendo a usar o autoload, o qual é um metodo magico
//Arquivo usado em conjunto com Automovel.php e DelRey.php
function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse. ".php") === true){
    require_once("$nomeClasse". ".php");
    //mas a chamade deu certo, pq os arquivos estão da mesma pasta
    }
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
});

//instanciando o carro delrey
$carro = new DelRey();

$carro->acelerar(80);


//verificar depois, sobre funções psl no php
?>