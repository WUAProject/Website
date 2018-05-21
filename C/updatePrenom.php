<?php
	
	require("../M/loginFunctions.php");
	require("../M/updateFunctions.php");
	session_start();

	if (isset($_POST["prenom"]) AND isset($_POST["pass"])) {
		$prenom = $_POST["prenom"];
		$pass = $_POST["pass"];
		
		$correctPass = getPass($_SESSION['profil']['idUtil'])->fetch();
		if (hash("sha512", $pass) == $correctPass[0]) {
			updatePrenom($_SESSION['profil']['idUtil'], $prenom);
			header("Location: ../index.php");
			exit();
		}		
	}

?>