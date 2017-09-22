<?php
// conexao
$servidor = "localhost";
$usuario 	= "root";
$senha 	= "";
$banco = "naldas";
$link = mysql_connect($servidor, $usuario, $senha); $db = mysql_select_db($banco,$link);
if(!$link) { echo "erro ao conectar ao banco de dados!";exit(); }

?>
