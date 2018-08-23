<?php
$username = $_POST['username'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$mt = $_POST['mt'];
$nl = $_POST['nl'];
$pwhash = password_hash($_POST['pwhash']);
$homecity = $_POST['homecity'];

require_once("../inc/db.php");

$db->query("SET NAMES 'utf8'");
$sql = "INSERT INTO user (username, name, lastname, mail, age, mt, nl, pwhash, homecity)
VALUES ('{$username}', '{$name}', '{$lastname}', '{$mail}', '{$age}', '{$mt}', '{$nl}', '{$pwhash}', '{$homecity}')";
$erg = $db->query($sql);
    if (!$erg){
    die ('Etwas stimmte mit der Abfrage nicht: '.$db->error);
  }
  else{
    print("1");
  }
 ?>
