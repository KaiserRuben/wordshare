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
$bekannteWorterArray = explode(";", $row["nl"];)

#und jeeetzt bereiten wir den sql dynamisch praktisch gut vor
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM words WHERE w_code='{$nl}' AND t_code='{$ml}' ORDER BY id DESC LIMIT 10";
#Das führen wir dann mal aus...
$erg = $db->query($sql);
  if (!$erg){
    die ('Nutzer ist wahrscheinlich nicht in der Datenbank: '.$db->error);
  }
$row = $erg->fetch_assoc();

#Und da wir es gerne als JSON hätten convertieren wir es noch und geben es dann aus.
$resultJSON = json_encode($row);
print($resultJSON);
?>
