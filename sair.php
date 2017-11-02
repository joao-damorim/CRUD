<?php
	session_start();
	session_destroy();
	
	//Remover todas informções contidas nas variaveis globais
	unset($_SESSION['usuarioId'],
		  $_SESSION['usuarioNome'],
		  $_SESSION['usuarioNivelAcesso'],
		  $_SESSION['usuarioLogin'],
		  $_SESSION['usuarioSenha']);
		  
	//Redirecionar o usuário para a página de login
	header("Location: http://interceptors.esy.es/");
?>