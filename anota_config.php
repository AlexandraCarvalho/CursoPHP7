<?php

#arquivo onde é inserido as configurações
#inclusive as de session, e chamando ele
#atraves do include/require_onde("config.php")
#vai tá incializando a sessão configurada nele
#sem necessidade de startar na página

//apagando um sessão, sem variavel definida, apaga todas
session_unset($_SESSION['nome']);

//limpar as variveis de sessão
session_destroy($_SESSION);

?>