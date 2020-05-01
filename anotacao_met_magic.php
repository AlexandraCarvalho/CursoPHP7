<?php
# new é um método construtor, toda linguagem POO tem!

//em php se tiver um __ é úm metodo magico

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    //metodo magico construct
    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }    

    //metodo magico
    public function destruct(){

        var_dump("DESTRUIR");
    }

    //metedo que faz com a variavel seja exectuda conforme oq tá descrito nele, a chama-la (echo)
    public function __toString(){

        return $this->logradouro." , ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

//var_dump($meuEndereco);

//unset($meuEndereco);

echo($meuEndereco);

?>