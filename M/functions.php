<?php

function getNbSoiree() {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM soiree");
}

function getNbUtil() {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM utilisateur");
}

function getNbUtilLastMonth() {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM utilisateur WHERE MONTH(dateInscription) = MONTH(CURRENT_DATE) - 1");
}

function getNbParticipant() {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM invite WHERE estParticipant = 1");
}

function getNbDifferentLocation() {
	require("connect.php");
	return $db->query("SELECT COUNT(DISTINCT idLieu) FROM soiree");
}

function getNbSoireeUser($id) {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM soiree s WHERE (idUtilOrga = ".$id.") OR (idSoiree IN (SELECT idSoiree FROM INVITE where idUtil = ".$id."))");
}

function getNbFollower($id) {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM suit WHERE idUtil1 = ".$id);
}

function getNbFollowing($id) {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM suit WHERE idUtil2 = ".$id);
}

function getNbInvitation($id) {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM invite WHERE idUtil = ".$id);
}

function getNbParticipation($id) {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM invite WHERE estParticipant = 1 AND idUtil = ".$id);
}

function getNbOrganisation($id) {
	require("connect.php");
	return $db->query("SELECT COUNT(*) FROM invite WHERE estAdmin = 1 AND idUtil = ".$id);
}
?>