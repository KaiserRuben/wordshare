<?php
#fügt Wörter in die Datenbank hinzu
#gibt 1 bei Erfolg (Wort noch nicht eingetragen), sonst 0 zurück

#Variablen initialisieren
$newword = $_POST['word'];
$translation = $_POST['translation'];
$w_code = $_GET['w_code'];
$t_code= $_GET['t_code'];
$creator_id = $_GET['creator_id'];

#Datenbankverbindung
require_once("../inc/db.php");

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
            $success = True;
          }
    }
    else{
      die ('Dieses Wort ist bereits in der Datenbank '.$db->error);
    }
$row = $erg->fetch_assoc();


#Erfolg?
if($success == True) print("1");
else print("0");
?>
