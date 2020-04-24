<?php
/*atribuição*/
/**$nome = "Alexandra";
*
/*concatenação*/
echo $nome . "desenvolvedora";

/*atribuuição pegando exemplo da variável e atribuindo*/
$valorTotal = 10
$valorTotal += 25; //vai dá 35

/*operadores aritmeticos*/
$a = 10;
$b = 2;

echo $a + $b;
echo "<br>";

echo $a - $b;
echo "<br>";

echo $a * $b;
echo "<br>";

echo $a / $b;
echo "<br>";

echo $a % $b;
echo "<br>";

echo $a ** $b; //elevado²
echo "<br>";

/*comparação*/
$c = 30;
$d = 55;

var_dump($c > $d); //return true or false
echo "<br>";
var_dump($c < $d); //return true or false

//para comparação é  ==
echo "<br>";
var_dump($c == $d); 

//para comparar o valor e o tipo é  ===
echo "<br>";
var_dump($c === $d); 

//para verificar se é diferente  !=
echo "<br>";
var_dump($c != $d); 

//para verificar se é diferente o valor e o tipo é  !==
echo "<br>";
var_dump($c !== $d); 

/*operador space chip (o primeiro maior =1, iguais 0, o segundo maior=-1)*/
echo "<br>";
var_dump($d <=> $c);

/*operador de varivale nulla*/
$e = NULL;
$f = NULL;
$g = 25;

echo $e ?? $f ?? $g;//mostra a não nula

?>