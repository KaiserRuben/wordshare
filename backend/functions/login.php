<?php

#LoginDatei für unsere Anwenung, gibt 1 oder 0 zurück.

#Variablen initialisieren
$username = $_POST['name'];
$pw_hash = password_hash($_POST['pw']);
#Datenbankverbindung
require_once("../inc/db.php");

#Daten aus der Datenbank holen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM user WHERE username='{$username}'";
$erg = $db->query($sql);
    if (!$erg){
    die ('Etwas stimmte mit der Abfrage nicht: '.$db->error);
  }
  $row = $erg->fetch_assoc();

#Validation
if($pw_hash == row["pwhash"]) print("1");
else print("0");


 ?>
