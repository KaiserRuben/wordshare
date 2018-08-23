<?php

#fügt Wörter in die Datenbank hinzu

#Variablen initialisieren
$word = $_POST['name'];
//aus Mangel an besseren Ideen:
$schonDa = True;
#Datenbankverbindung
require_once("../inc/db.php");

#Daten aus der Datenbank holen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM words WHERE word='{$newword}'";
$erg = $db->query($sql);
    if (!$erg)
    {
      $schonDa = False;
    }
  $row = $erg->fetch_assoc(); //??????

#Validation
if($pw_hash == row["pwhash"]) print("1");
else print("0");


 ?>
