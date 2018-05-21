<?php

	function getNbUser($mail) {
		require("connect.php");
		return $db->query("SELECT COUNT(*) FROM utilisateur WHERE mailUtil = '".$mail."'");
	}

	function getUser($mail, $pass) {
		require("connect.php");
		return $db->query("SELECT * FROM utilisateur WHERE mailUtil = '".$mail."' AND mdpUtil = '".$pass."'");
	}

	function addUser($mail, $pass, $nom, $prenom, $genre, $birthday) {
		$sexTranslate = 2;
		if ($genre == "F") {
			$sexTranslate = 1;
		}
		if ($genre == "H") {
			$sexTranslate = 0;
		}
		require("connect.php");
		$db->query("INSERT INTO utilisateur (mailUtil, mdpUtil, nomUtil, prenomUtil, genreUtil, dateNaiss, dateInscription) VALUES ('".$mail."', '".$pass."', '".$nom."', '".$prenom."', ".$sexTranslate.", '".$birthday."', SYSDATE())");
	}

?>