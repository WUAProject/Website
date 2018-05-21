<?php
	
	require("../M/loginFunctions.php");
	require("../M/updateFunctions.php");
	session_start();

	if (isset($_POST["newPass"]) AND isset($_POST["oldPass"])) {
		$newPass = $_POST["newPass"];
		$oldPass = $_POST["oldPass"];
		
		$correctPass = getPass($_SESSION['profil']['idUtil'])->fetch();
		if (hash('sha512', $oldPass) == $correctPass[0]) {
		//if ($oldPass == $correctPass[0]) {
			updatePass($_SESSION['profil']['idUtil'], hash('sha512', $newPass));
			//updatePass($_SESSION['profil']['idUtil'], $newPass);
			header("Location: ../index.php");
			exit();
		}		
	}

?>