<?php
#Variablen initialisieren
$input = $_GET['input'];

#Datenbankverbindung
require_once("../inc/db.php");

#Datenbanken nach existierenden Worten durchsuchen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT word FROM words WHERE *";
$erg = $db->query($sql);
$words = $erg->fetch_assoc();

// Worte zählen
$wordnumber = int count ( mixed $words [, int $mode = COUNT_NORMAL ] );

//länge input
$strlenght = int strlen ( string $input );

//Worte mit selbem Anfang ermitteln
$counter = int 0;
$result = "";
while (!$counter == $wordnumber){
$w_beginn = string substr ( string $words[$counter] , int 0 [, int $strlenght] );
if ( $w_beginn == $words[$counter]){
  $result = $result + ", " $words[$counter];
  $counter = $counter + 1;
}
}
print ($result);

?>
