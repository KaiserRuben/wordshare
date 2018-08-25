<?php
#Variablen initialisieren
$input = $_GET['input'];
#Datenbankverbindung
require_once("../inc/db.php");

#Datenbanken nach existierenden Worten durchsuchen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT word FROM words";
$erg = $db->query($sql);
$words = $erg->fetch_array();

# Worte zählen
$wordnumber = mysql_num_rows($words);
print($wordnumber);

#$wordnumber = count ( $words );

#Länge input
$strlenght = strlen ( $input );

#Worte mit selbem Anfang ermitteln
$counter = 0;
$result = " ";
while (!($counter == $wordnumber)){
$w_beginn = substr ($words[$counter] , 0 , $strlenght);
print ($words[$counter]);

# Worte aneinander fügen
if ( $w_beginn == $words[$counter]){
  $result = $result + ", "+ $words[$counter];
}
  $counter++;
}
print ($result);
?>
