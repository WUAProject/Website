<?php
	
	require("../M/loginFunctions.php");
	require("../M/updateFunctions.php");
	session_start();

	if (isset($_POST["nom"]) AND isset($_POST["pass"])) {
		$nom = $_POST["nom"];
		$pass = $_POST["pass"];
		
		$correctPass = getPass($_SESSION['profil']['idUtil'])->fetch();
		if (hash("sha512", $pass) == $correctPass[0]) {
			updateNom($_SESSION['profil']['idUtil'], $nom);
			header("Location: ../index.php");
			exit();
		}		
	}

?>