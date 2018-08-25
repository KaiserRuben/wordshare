<?php
#Variablen initialisieren
$input = $_GET['input'];
#Datenbankverbindung
require_once("../inc/db.php");

#Datenbanken nach existierenden Worten durchsuchen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT word FROM words"; // Where word like 'name*'
$erg = $db->query($sql);
$words = array();

while ($row = $erg->fetch_assoc()) {
  $words[] = $row;
}

# Worte zählen
$wordnumber = count($words);
#print($wordnumber);

#Länge input
$strlenght = strlen ( $input );

#Worte mit selbem Anfang ermitteln
$counter = 0;
$komma = 0;
$result = "";
while (!($counter == $wordnumber)){

$w_beginn = substr ($words[$counter]["word"] , 0 , $strlenght);
#print($words[$counter]["word"]);

# Worte aneinander fügen
if ($w_beginn == $input){
  #Kommasetzung
  if ($komma > 0){
      $result = $result." ,";
  }
$komma = 1;
  $result = $result.$words[$counter]["word"];
}
  $counter++;
}
print ($result);
?>
