<?php

#fügt Wörter in die Datenbank hinzu

#Variablen initialisieren
$newword = $_POST['word'];
//aus Mangel an besseren Ideen:

$schonDa = True;
#Datenbankverbindung
require_once("../inc/db.php");

#Prüfe, ob Wort bereits existiert
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM words WHERE word='{$newword}'";
$erg = $db->query($sql);
    if (!$erg)
    {
      $schonDa = False;
    }
  $row = $erg->fetch_assoc(); 



#Daten aus der Datenbank holen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM words WHERE word='{$newword}'";
$erg = $db->query($sql);
    if (!$erg)
    {
      $schonDa = False;
    }
  $row = $erg->fetch_assoc();

#Validation
if($pw_hash == row["pwhash"]) print("1");
else print("0");


 ?>
