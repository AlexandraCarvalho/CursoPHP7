<?php

for ($i = 0; $i < 10; $i ++) {

    echo $i . "<br>";

}

/* parametros do FOR:
* valor inicial;
* executar até;
* incremento / ou decremento;
*/

//exemplo de um for que executa de 5 em 5:
    for ($i = 0; $i < 100; $i+=5) {

        //condição para pular alguns números
        if ($i > 20 && $i < 80) continue;
        echo $i . "<br>";

        //condição para sair desse for
        if ($i === 90) break;
        echo $i . "<br>";
    }


    ///////////////////////exemplo com HTML
    echo "<select>";

    for ($i=date("Y"); $i >= date("Y")-100; $i--)
    {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
     echo "</select>"

?>