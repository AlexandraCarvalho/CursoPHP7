<?php

####configurando data e hora em portugues-br
setlocale(LC_ALL,"pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A %B");

//função de data, listando dia, mes e ano
echo date("d/m/Y H:i:s");

echo "<br>";

//função que lista o time stamp
echo time();

echo "<br>";
//função que converte uma data para time stamp
$ts = strtotime("1995-02-02");

//listando dia da semana, dia/mes/ano daqule timestamp
echo date("l, d/m/Y", $ts);


?>