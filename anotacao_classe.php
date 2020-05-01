<?php

//POO
##oq eu preciso armazenar, coloco em atributos
##oq preciso executar coloca em métodos
##o Objeto é uma variável que representa uma classe!
//por ex: $sql = new Sql;
//essa $sql é o objeto, que dizer a varivale foi instanciada
//um atributo, é uma variável que ganhou mais recursos
//um método, é uma função que ganhou mais recursos
//uma classe é um conjunto de atributos e métodos

class Pessoa {
    //atributo
    public $nome;
    //método
    public function falar(){

        //$this é representação da classe já instanciada,ou seja o objeto
        //atributo dentro do método é escrito sem o $
        return "O meu nome é".$this->nome;
    }
}

$glaucia = new Pessoa();
$glaucia->nome = "Glaucia Daniela";
echo $glaucia->falar();//método sem parametro


?>