<?php
//Interface: define oq tem que ter pra utiliza-la
#Pra isso que existe documentação de API.

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

//essa classe tem que implementar a interface Veiculo
class Civic implements Veiculo{

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

//instanciando o obj
$carro = new Civic();

$carro->trocarMarcha(1);
echo "<br/>";
$carro->frenar(80);
echo "<br>";
$carro->acelerar(120);




?>