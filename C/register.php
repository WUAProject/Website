<?php

	require("../M/loginFunctions.php");
	$mail = $_POST["mail"];
	$pass = $_POST["pass"];
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$genre = $_POST["sex"];
	$date = date('Y-m-d', strtotime($_POST["birthday"]));
	if (isset($mail) AND isset($pass) AND isset($nom) AND isset($prenom) AND isset($genre) AND isset($date)) {
		if (trim($mail) != "" AND trim($pass) != "" AND trim($nom) != "" AND trim($prenom) != "" AND trim($genre) != "" AND trim($date) != "") {
			if (filter_var(htmlspecialchars($mail),FILTER_VALIDATE_EMAIL)) {
				addUser($mail, $pass, $nom, $prenom, $genre, $date);
				header("Location: ../index.php");
				exit();
			}
		}
	}

?>