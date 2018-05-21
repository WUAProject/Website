<?php
	
	require("../M/loginFunctions.php");
	require("../M/updateFunctions.php");
	session_start();

	if (isset($_POST["mail"]) AND isset($_POST["pass"])) {
		$mail = $_POST["mail"];
		$pass = $_POST["pass"];
		if (filter_var(htmlspecialchars($mail),FILTER_VALIDATE_EMAIL)) {
			$correctPass = getPass($_SESSION['profil']['idUtil'])->fetch();
			if (hash("sha512", $pass) == $correctPass[0]) {
				$userCount = getNbUser($mail)->fetch();
				if ($userCount['COUNT(*)'] == 0) {
					updateMail($_SESSION['profil']['idUtil'], $mail);
					header("Location: ../index.php");
					exit();
				}
			}
		}		
	}

?>