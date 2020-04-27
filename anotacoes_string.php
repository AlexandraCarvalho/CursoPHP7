<?php
/*exemplo-01*/
$nomeacao = "Hcode";

$nomeacao2 = 'Treinamentos';

echo "ABC $nomeacao";

//com aspas simples, ele entendo que tudo dentro do echo é texto
echo 'ABC $nome';

/*exemplo-02*/
$nome = "alexandra carvalho";

//função que deixa todos os caracteres maiusculos
echo strtoupper($nome);

//função que converter todos os caracteres para minusculo
echo strtolower($nome);

//função que deixa maiusculo a primeira letra de cada palavra
echo ucwords($nome);

/*exemplo-03*/
$empresa = "Hcode";

//função que troca um caracterer por outro
$empresa = str_replace("o","0", $empresa);

/*exemplo-04*/
$frase = "A repetição é a mãe da retençãp.";

//função que procura uma palavra no texto
$q = strpos($frase, "mãe");

var_dump($q);

//função que retorna um fragmento do texto
$texto = substr($frase, 0, $q);

var_dump($texto);

strlen($texto);//função pra contar a string 
?>