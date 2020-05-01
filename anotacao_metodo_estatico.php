<?php
#o Estatico permite que tanto um atributo
#quanto um metodo possam ser chamados ou
#acessados sem que seja criado uma representação
#daquela classe ou objeto

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
    
        //para acessar metodos estaticos é ::
        $resultado = Documento::validarCPF($numero);

        if($resultado === false){
            throw new Exception("CPF informado não é valido.", 1);
        }
        $this->numero = $numero;
    }


    public static function validarCPF($cpf){

        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}

#validando usando a classe
//$cpf = new Documento();
//$cpf->setNumero("51960537008");
//var_dump($cpf->getNumero());//listando

//validando usando o metodo direto, sem precisar criar o obj, instanciar a classe
#nesse exemplo o metodo é: validarCPF
var_dump(Documento::validarCPF("51960537008"));

#A vantangem do metodo estatico, é que não precisa criar um obj pra chama-lo.
/*é usado a palavra-chave: static*/


?>