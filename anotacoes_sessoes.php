<?php

//inciciar uma sessão em PHP
session_start();

//nesse arquivo é atribuido o valor da sessão
$_SESSION["nome"] = "HCode";

## em toda pagina que for usar sessão, tem 
# que ter o session_start();
?>