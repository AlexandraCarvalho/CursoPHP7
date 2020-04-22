<?php
/*exemplo-01*/

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

echo "<br/>";
echo($nomeCompleto);

/*exemplo-03*/

//tipos de dados:
$empresa= "HCode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;

$bloqueado = false;
/////////////////////////////////////////////////
$frutas = array("amora","laranja","coco");


//listando um item do array, nesse caso a "laranja":
echo "<br;>";
echo $frutas[1];

//declarando um objeto, usando a palavra reservada 'new'
$nascimento = new DateTime();

/////////////////////////////////////////////////////

$arquivo = fopen("exemplos.php","r"); //leitura de arquivos(resource)
echo "<br/>";
var_dump($arquivo);

//$nulo = NULL; //->variavel do tipo nulo(que é a ausencia de valor)

//DICA! declarar variaveis sempre autoexplicativas.

/**15.variáveis pré-definidas**/
?>