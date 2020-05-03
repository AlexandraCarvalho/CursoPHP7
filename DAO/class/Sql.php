<?php

class Sql extends PDO {

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }

    private function setParams($statement, $parameters = array()){
        //recebendo varios parametros
        foreach ($parameters as $key => $value){

            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value){
        //recebendo apenas um parametro
        $statement->bindParam($key, $value);
    }

    //recebe como parametro as querys brutas, e os parametros(dados recebidos do bd)
    public function query($rawQuery, $params = array()){
                                    #$RawQuery
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt; 
    }

    public function select($rawQuery, $params = array()):array
    {

        $stmt = $this->query($rawQuery, $params);

        //retornando apenas os dados associativos
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>