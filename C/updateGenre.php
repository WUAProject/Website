<?php
	
	require("../M/loginFunctions.php");
	require("../M/updateFunctions.php");
	session_start();

	if (isset($_POST["sex"]) AND isset($_POST["pass"])) {
		$genre = $_POST["sex"];
		$pass = $_POST["pass"];
		
		$correctPass = getPass($_SESSION['profil']['idUtil'])->fetch();
		if (hash("sha512", $pass) == $correctPass[0]) {
			updateGenre($_SESSION['profil']['idUtil'], $genre);
			header("Location: ../index.php");
			exit();
		}		
	}

?>