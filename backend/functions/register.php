<?php
$username = $_GET['username'];
$name = $_GET['name'];
$lastname = $_GET['lastname'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$mt = $_GET['mt'];
$nl = $_GET['nl'];
$pwhash = password_hash($_GET['pwh']);
$homecity = $_GET['homecity'];

require_once("../inc/db.php");

$db->query("SET NAMES 'utf8'");
$sql = "INSERT INTO user (username, name, lastname, mail, age, mt, nl, pwhash, homecity)
VALUES ('{$username}', '{$name}', '{$lastname}', '{$mail}', '{$age}', '{$mt}', '{$nl}', '{$pwhash}', '{$homecity}')";
$erg = $db->query($sql);
    if (!$erg){
    die ('Etwas stimmte mit der Abfrage nicht: '.$db->error);
  }
  else{
    $success = true;
  }


  #Erfolg?
  if($success == true) print("1");
  else print("0");
 ?>
