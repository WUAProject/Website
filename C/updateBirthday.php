<?php
	
	require("../M/loginFunctions.php");
	require("../M/updateFunctions.php");
	session_start();

	if (isset($_POST["birthday"]) AND isset($_POST["pass"])) {
		$birthday = date('Y-m-d', strtotime($_POST["birthday"]));
		$pass = $_POST["pass"];
		
		$correctPass = getPass($_SESSION['profil']['idUtil'])->fetch();
		if (hash("sha512", $pass) == $correctPass[0]) {
			updateBirthday($_SESSION['profil']['idUtil'], $birthday);
			header("Location: ../index.php");
			exit();
		}		
	}

?>