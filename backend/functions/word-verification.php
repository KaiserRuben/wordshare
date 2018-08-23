<?php

#Verifikationsdatei - ordnet Wort von w_verification nach word oder sortiert Wort aus

#Variablen initialisieren
$wordtoverificate = $wordid;
$bewertung = $_POST['button'];
$verificator = $verificator

#Datenbankverbindung
require_once("../inc/db.php");

#Abfrage: Bewertung positiv oder negativ

if ($bewertung == 1){
#Neues Wort zu word hinzufügen
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM w_verification WHERE id='{$wordtoverificate}'";
$erg = $db->query($sql);
    if (!$erg){
    die ('Etwas stimmte mit der Abfrage nicht: '.$db->error);
  }
  $row = $erg->fetch_assoc();

#Neuer Datensatz in Tabelle word
$db->query("SET NAMES 'utf8'");
$sql = "INSERT INTO word (word, translation, w_code, t_code, creator_id, verificator_id)
VALUES ($row["word"], $row["translation"], $row["w_code"],$row["t_code"],$row["creator_id"],$verificator)";

#Datensatz aus w_verification löschen
$sql ="DELETE FROM w_verification
WHERE id = $row["id"]"


}


 ?>
