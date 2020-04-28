<?php

require_once("anotacoes_sessoes.php");

//lista o id da sessão
echo session_id();


//gerar um id de sessão de forma "manual", que muda sempre que a
//pagina é atualizada, evita que seja hakeado o id de sessão
session_regenerate_id();
?>