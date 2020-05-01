<?php
//Encapsulamento = modificador de acesso.

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

$objeto = new Pessoa();

# echo $objeto->nome . "<br/>"; //atributo publico, onde qualquer um consegue acessar
# echo $objeto->idade . "<br/>"; //atributo protegido, apenas as classes e herdeiro(classe extendida) conseguem acessar
# echo $objeto->senha . "<br/>"; //atributo privado, apenas a propriva classe consegue acessar

//agora acessando os dados atraves do metodo que é publico, é possível ver todos os atributos
//mesmo o que é privado, pois estão sendo acessados direto da propria classe.
$objeto->verDados();

/*quem pode acessar os atributos e metodos de uma classe? */
//mesma classe; (private)
//classe extendida; (protected)
//objeto; (public)


?>