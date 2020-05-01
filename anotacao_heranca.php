<?php

//UML é utilizada pra modelagem de sistemas, no que diz respeito a desenvolvimento
# Projetar antes de codificar
/*tentar sempre melhorar, com os meios que vc tem*/

class Documento {

    private $numero;

    public function getNumero(){

        return $this->numero;
    }

    public function setNumero($n){

        $this->numero = $n;

    }
}

class CPF extends Documento {

    public function validar():bool
    {
        $numeroCPF = $this->getNumero();

        //validacao do cpf

        return true;
    }
}

$doc = new CPF();

$doc->setNumero("11222333-44");// inserindo o numero do documento

$doc->validar();

echo "<br/>";

echo $doc->getNumero();// pegando o numero que foi definido do documento







?>