<?php
#fügt Wörter in die Datenbank hinzu
#gibt 1 bei Erfolg (Wort noch nicht eingetragen), sonst 0 zurück

#Variablen initialisieren
$newword = $_GET['word'];
$translation = $_GET['transword'];

$user = $_GET['user'];

#Datenbankverbindung
require_once("../inc/db.php");

#Finde id des users heraus
$db->query("SET NAMES 'utf8'");
$sql = "SELECT id, mt, nl FROM user WHERE username='{$user}'";
$erg = $db->query($sql);
$row = $erg->fetch_assoc();
$creator_id = $row["id"];
$w_code = $row["mt"];
$t_code= $row["nl"];

#Prüfe, ob Wort bereits existiert
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM words WHERE word='{$newword}'";
$erg = $db->query($sql);
    if (!$erg){
      $sql = "SELECT * FROM w_verification WHERE word='{$newword}'";
      $erg = $db->query($sql);
          if (!$erg){
            $sql = "INSERT INTO w_verification (word, translation, w_code, t_code, creator_id)
            VALUES ('{$newword}', '{$translation}', '{$w_code}','{$t_code}','{$creator_id}')";
            $erg = $db->query($sql);
            if ($erg){
              $success = true;
            }
          }
    }
    else{
      die ('Dieses Wort ist bereits in der Datenbank '.$db->error);
    }


#Erfolg?
if($success == true) print("1");
else print("0");
?>
