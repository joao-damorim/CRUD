<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
       	$conectar = mysql_connect("mysql.hostinger.com.br", "u527092020_joao", "852963","u527092020_crud") or die ("Erro na conexão");
	mysql_select_db("u527092020_crud") or die ("Base não encontrada")
?>