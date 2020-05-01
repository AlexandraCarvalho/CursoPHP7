<?php

class Carro {
    
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){

        return $this->modelo;
    }

    //recebendo parametro, que é a varivel a ser modificada
    public function setModelo($modelo){

        //são diferentes, a segunda é o parametro passado na função
        $this->modelo = $modelo;

    }

    //get retorna, por isso tem return
    public function getMotor():float{

        return $this->motor;
    }

    //set insere
    public function setMotor($motor){

        $this->motor;
    }

    public function getAno():int{

        return $this->ano;
    }

    public function setAno($ano){

        $this->ano;
    }

    public function exibir(){

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2016");

print_r($gol->exibir());
?>