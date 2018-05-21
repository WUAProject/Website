<?php

try {
$db = new PDO('mysql:host=localhost;dbname=pjs4;', "root", "", array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}
?>
