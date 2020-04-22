<?php
/*exdemplo-01*/

//declaração de variável
$nome = "Alexandra";

echo $nome;
//dando espaço entre a listagem dos itens
echo "<br/>";
//descrição da variável, listando tipo e quantidade de caracteres
var_dump($nome);


/*exemplo-02*/

//padrão camelCase
$anoNascimento = 1995;

//caracter especial permitida
$nome_completo = "Alexandra Carvalho";

//limpando a variavel -pode ser passado mais de uma variável
unset($nome_completo);

//chamando a variável, caso ela tenha sido definida
if (isset($anoNascimento)){
    echo($anoNascimento);
}

$sobrenome = "Carvalho";

//concatenação de variáveis
$nomeCompleto = $nome . " " . $sobrenome;

echo($nomeCompleto);


?>