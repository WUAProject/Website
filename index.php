<?php

	session_start();

	if ((count($_GET) != 0) && !(isset($_GET['controle']) && isset($_GET['action']))) {
		require('./V/error404.tpl');
	} else {
		if ((!isset($_SESSION['profil'])) || count($_GET) == 0){
			$controle = "index";
			$action = "ident";
		} else {
			if (isset($_GET['controle']) && isset($_GET['action'])) {
				$controle = $GET['controle'];
				$action = $_GET['action'];
			}
		}
		require('./C/'.$controle.'.php');	
	}

?>