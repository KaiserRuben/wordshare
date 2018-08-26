<?php
/*
Dieses geniale Script ist geschrieben um zu dem Nutzer passende Wörter aus der Datenbak zu  holen.
 Was reinkommt:  Der Nutername als _GET (kommt aus daily-word.html)
Was rausgeht:   Ein JSON mit Wort, Übersetzung, jeweils den Language-Codes und dem Timestamp.
 Ein gutes Lied zum Programmieren: https://www.youtube.com/watch?v=knfrxj0T5NY
Nevermind ich finde Trap Nation ist generell nice, gerade zum Programmieren (chillig und so)
 By the Way:
Windows ist wie ein U-Boot,sobalt man ein Fenster öffnet,fangen die Probleme an.
*/
 #Variablen initialisieren
$username = $_GET['username'];
$type = $_GET['type'];
$mode = $_GET['mode'];
 #Datenbankverbindung
require_once("../inc/db.php");
 #Nutzerdaten holen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM user WHERE username='{$username}'";
$erg = $db->query($sql);
  if (!$erg){
    die ('Nutzer ist wahrscheinlich nicht in der Datenbank: '.$db->error);
  }
$row = $erg->fetch_assoc();
 #Userpräferenzen festlegen um passende Wörter zu finden
$mt = $row["mt"];
$nl = $row["nl"];
$bekannteWorterArray = explode(";", $row["id_words"]);
 #und jeeetzt bereiten wir den sql dynamisch praktisch gut vor
if($type == "word"){
  $sql = "SELECT * FROM words WHERE w_code='{$nl}' AND t_code='{$mt}' ORDER BY id DESC LIMIT 10";
}elseif ($type=="verification") {
  $mt = $row["nl"];
  $nl = $row["mt"];
  if ($mode == "0") {
  $sql = "SELECT * FROM w_verification WHERE w_code='{$nl}' AND t_code='{$mt}' ORDER BY id LIMIT 1";
}else{
  $sql = "SELECT * FROM w_verification WHERE w_code='{$nl}' AND t_code='{$mt}' ORDER BY RAND() LIMIT 1";
}
}elseif ($type == "game") {
  $sql = "SELECT * FROM words WHERE w_code='{$nl}' AND t_code='{$mt}' ORDER BY id DESC LIMIT 6";
}
#Das führen wir dann mal aus...
$db->query("SET NAMES 'utf8'");
$erg = $db->query($sql);
  if (!$erg){
    die ('Nutzer ist wahrscheinlich nicht in der Datenbank: '.$db->error);
  }
#Der Array ist mehrdimensional (hat mich n bisschen Zeit gekostet to realise it) daher müssen wir ihn stufenweisen hinzufügen
$daten = array();
while ($row = $erg->fetch_assoc()) {
  array_push($daten, $row);
}
 #Und da wir es gerne als JSON hätten convertieren wir es noch und geben es dann aus.
$resultJSON = json_encode($daten);
print($resultJSON);
?>
