<?php

//Tudo que tiver em subpasta, é bom ter definido um namespace
//definindo namespace definido pra essa classe
namespace Cliente;

class Cadastro extends \Cadastro {

    public function registrarVenda(){

        echo "Foi registrada uma venda para a cliente  ".$this->getNome();
    }

}


?>