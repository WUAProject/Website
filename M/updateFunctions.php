<?php

	function getPass($id) {
		require("connect.php");
		return $db->query("SELECT mdpUtil FROM utilisateur WHERE idUtil = ".$id);
	}

	function updateMail($id, $mail) {
		require("connect.php");
		$db->query("UPDATE utilisateur SET mailUtil = '".$mail."' WHERE idUtil = ".$id."");
	}

	function updatePass($id, $pass) {
		require("connect.php");
		$db->query("UPDATE utilisateur SET mdpUtil = '".$pass."' WHERE idUtil = ".$id."");
	}

	function updateNom($id, $nom) {
		require("connect.php");
		$db->query("UPDATE utilisateur SET nomUtil = '".$nom."' WHERE idUtil = ".$id."");
	}

	function updatePrenom($id, $prenom) {
		require("connect.php");
		$db->query("UPDATE utilisateur SET prenomUtil = '".$prenom."' WHERE idUtil = ".$id."");
	}

	function updateGenre($id, $genre) {
		$sexTranslate = 2;
		if ($genre == "F") {
			$sexTranslate = 1;
		}
		if ($genre == "H") {
			$sexTranslate = 0;
		}
		require("connect.php");
		$db->query("UPDATE utilisateur SET genreUtil = ".$sexTranslate." WHERE idUtil = ".$id."");
	}

	function updateBirthday($id, $birthday) {
		require("connect.php");
		$db->query("UPDATE utilisateur SET dateNaiss = '".$birthday."' WHERE idUtil = ".$id."");
	}

?>