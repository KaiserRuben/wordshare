<?php
#Variablen initialisieren
$input = $_GET['input'];
#Datenbankverbindung
require_once("../inc/db.php");

#Datenbanken nach existierenden Worten durchsuchen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT word FROM words";
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
$result = "";
while (!($counter == $wordnumber)){
$w_beginn = substr ($words[$counter]["word"] , 0 , $strlenght);
#print($words[$counter]["word"]);

# Worte aneinander fügen
// print(substr ($words[$counter]["word"] , 0 , $strlenght));
// print($input);
if ($w_beginn == $input){
  #die();
  // $result = $result + ", "+ $words[$counter]["word"];
  $result = $words[$counter]["word"];
}
  $counter++;
}
print ($result);
?>
