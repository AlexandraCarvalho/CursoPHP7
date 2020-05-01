<?php
#interface criada aqui mesmo na classe Automovel
interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

//essa classe tem que implementar a interface Veiculo
abstract class Automovel implements Veiculo{

    //o nome do metodo tem que ser exatamente o da interface
    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade . "km/h";
    }

    public function frenar($velocidade){

        echo "O veículo frenou até " . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha;

    }
}

?>