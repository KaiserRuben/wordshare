<?php
#fügt Wörter in die Datenbank hinzu
#gibt 1 bei Erfolg (Wort noch nicht eingetragen), sonst 0 zurück

#Variablen initialisieren
$newword = $_GET['word'];
$translation = $_GET['transword'];
$user = $_GET['user'];


if ($newword == "" || $translation == "") {
die("This word is not new!");
}

#Datenbankverbindung
require_once("../inc/db.php");

#id des users herausfinden
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM user WHERE username='{$user}'";
$erg = $db->query($sql);
if (!$erg){
  die ($db->error);
}
$row = $erg->fetch_assoc();
$creator_id = $row["id"];
$w_code = $row["mt"];
$t_code = $row["nl"];
if (!$erg){
  die ($db->error);
}

#Prüfe, ob Wort bereits existiert
$db->query("SET NAMES 'utf8'");
$sql = "SELECT * FROM words WHERE word='{$newword}'";
$erg = $db->query($sql);
$row = $erg->fetch_assoc();
if(isset($row["word"])) die("'Dieses Wort ist bereits in der Datenbank.");

$sql = "SELECT * FROM w_verification WHERE word='{$newword}'";
$erg = $db->query($sql);
$row = $erg->fetch_assoc();
if(isset($row["word"])) die("'Dieses Wort ist bereits in der Datenbank.");

$sql = "INSERT INTO w_verification (word, translation, w_code, t_code, creator_id)
        VALUES ('{$newword}', '{$translation}', '{$w_code}','{$t_code}','{$creator_id}')";
$erg = $db->query($sql);
  if ($erg){
              $success = true;
            }

    else{
      die ('Es gab ein Problem '.$db->error);
    }


$sql = "INSERT INTO w_verification (word, translation, w_code, t_code, creator_id)
        VALUES ('{$translation}', '{$newword}', '{$t_code}', '{$w_code}', '{$creator_id}')";
$erg = $db->query($sql);
if ($erg){
  $success = true;
}

else{
  die ('Es gab ein Problem '.$db->error);
}


#Erfolg?
if($success == true) print("1");
?>
