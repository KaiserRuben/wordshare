<?php
#Datenbankverbindung
require_once("../inc/db.php");

#Datenbanken nach existierenden Worten durchsuchen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT word,translation FROM words";
$erg = $db->query($sql);
$words = array();

while ($row = $erg->fetch_assoc()) {
  $words[] = $row;
}

echo($words[]);
?>
