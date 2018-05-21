<?php

require("M/functions.php");

function displayNbSoiree() {
	$nbSoiree = getNbSoiree()->fetch();
	echo "
	<h3>".$nbSoiree[0]." soirées organisées</h3>";
}

function displayNbUtil() {
	$nbUtil = getNbUtil()->fetch();
	echo "
	<h3>".$nbUtil[0]." utilisateurs</h3>";
}

function displayNbUtilLastMonth() {
	$nbUtil = getNbUtilLastMonth()->fetch();
	echo "
	<h3>".$nbUtil[0]." nouveaux utilisateurs le mois dernier</h3>";
}

function displayNbParticipant() {
	$nbUtil = getNbParticipant()->fetch();
	echo "
	<h3>".$nbUtil[0]." participations à des soirées</h3>";
}

function displayNbDifferentLocation() {
	$location = getNbDifferentLocation()->fetch();
	echo "
	<h3>".$location[0]." lieus de soirées différents</h3>";
}

function displayWeightOfPasta() {
	$wPasta = getWeightOfPasta();
	echo "
	<h3>".$wPasta."kg de pâtes achetés</h3>";
}

function displayQuantityOfBeer() {
	$qtBeer = getQuantityOfBeer();
	echo "
	<h3>".$qtBeer." bouteilles de bières achetées</h3>";
}

function displayNbFollower($id) {
	$nb = getNbFollower($id);
	$res = 0;
	if ($nb != null) {
		while ($data = $nb->fetch()) {
			$res = $data[0];
		}
	}
	echo "<td class='text-center border'>
			<p class='chiffre'>".$res."<p>
			<p>Suivit</p>
		</td>";
}

function displayNbFollowing($id) {
	$nb = getNbFollowing($id);
	$res = 0;
	if ($nb != null) {
		while ($data = $nb->fetch()) {
			$res = $data[0];
		}
	}
	echo "<td class='text-center border'>
			<p class='chiffre'>".$res."<p>
			<p>Suit</p>
		</td>";
}

function displayNbSoireeUser($id) {
	$nb = getNbSoireeUser($id);
	$res = 0;
	if ($nb != null) {
		while ($data = $nb->fetch()) {
			$res = $data[0];
		}
	}
	echo "<td class='text-center border'>
			<p class='chiffre'>".$res."<p>
			<p>Evènements</p>
		</td>";
}

function displayNbInvitation($id) {
	$nb = getNbInvitation($id);
	$res = 0;
	if ($nb != null) {
		while ($data = $nb->fetch()) {
			$res = $data[0];
		}
	}
	echo "<p>Nombre d'invitations: ".$res."</p>";
}

function displayNbParticipation($id) {
	$nb = getNbParticipation($id);
	$res = 0;
	if ($nb != null) {
		while ($data = $nb->fetch()) {
			$res = $data[0];
		}
	}
	echo "<p>Nombre de participations: ".$res."</p>";
}

function displayNbOrganisation($id) {
	$nb = getNbOrganisation($id);
	$res = 0;
	if ($nb != null) {
		while ($data = $nb->fetch()) {
			$res = $data[0];
		}
	}
	echo "<p>Nombre de soirées organisées: ".$res."</p>";
}

?>