<?php

/*foreach é utilizado para percorrer arrays e coleções*/

$meses = array(
    "Janeiro", "Favereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);


foreach ($meses as $index => $mes) {
    
    echo "Indice" .$index."<br>";
    echo "O mês é:" .$mes. "<br><br>";
}


# Sintaxe Foreach:
# (array as chave => valor)

//RECUPERANDO UM VALOR em formulário
<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>

<?php
//Arwuvo para teste de execução dos itens em individual.
/*CONDIÇÃO FOR*/
if(isset($_GET)){

    foreach ($_GET as $key => $value) {
        
        echo "Nome do campo:" . $key . "<br>";

        echo "Valor do campo:" .$value;
        
        echo "<hr>";

    }
}  

?>