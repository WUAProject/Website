<?php
	session_start();
	if (isset($_POST["mail"]) AND isset($_POST["pass"])) {
		$mail = htmlspecialchars($_POST["mail"]);
		$pass = htmlspecialchars($_POST["pass"]);
		require("../M/loginFunctions.php");
		if (getNbUser($mail)->fetch() == true) {
			$userCount = getNbUser($mail)->fetch();
			if ($userCount['COUNT(*)'] == 1) {
				$user = getUser($mail, hash('sha512', $pass))->fetch();
				//$user = getUser($mail, $pass)->fetch();
				$_SESSION['profil'] = $user;
				header("Location: ../index.php");
				exit();
			}
		}		
	}
?>