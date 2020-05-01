<?php

class Pessoa {

    public $nome = "Ramus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }
}

//classe programar herda da classe pessoa
class Programador extends Pessoa {

    public function verDados(){

        //verificando de que classe esse metodo está sendo chamado:
        echo get_class($this);

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }
}    

$objeto = new Programador();

$objeto->verDados();

?>