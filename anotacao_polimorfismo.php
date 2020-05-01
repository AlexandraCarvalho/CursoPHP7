<?php
//Polimorfismo é quando metodos com mesmo nome 
//em classes diferentes (classes herdadas) tem o 
//comportamento diferente/faz outra coisa.

abstract class Animal {

    public function falar(){

        return "Som";
    }

    public function mover(){

        return "Anda";
    }
}

class Cachorro extends Animal {

    public function falar(){

        return "Late";
    }
}

class Gato extends Animal {

    public function falar(){

        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){

        return "Canta";
    }

    public function mover(){

        //sobreescrevendo o metodo e utilizando junto com o metodo original
        //parent se refere a Classe Pai, a acessa o metodo estaticamente
        //$this se refere ao proprio obj 
        return "Voa e" . parent::mover();
    }
}


//objeto da classe cachorro = pluto
$pluto = new Cachorro();

//execução do metodo falar
echo $pluto->falar(). "<br/>";
echo $pluto->mover(). "<br/>";

$marie = new Gato();

//execução do metodo falar
echo $marie->falar(). "<br/>";
echo $marie->mover(). "<br/>";

$ave = new Passaro();

//execução do metodo falar
echo $ave->falar(). "<br/>";
echo $ave->mover(). "<br/>";

?>